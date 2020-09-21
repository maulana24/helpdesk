<?php
defined('BASEPATH') OR exit('No direct script access allowed');

date_default_timezone_set('Asia/Kuala_Lumpur');

class Help_desk extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('data_tb_model','data_tb');

        if (!empty($this->session->userdata('tugas_terakhir'))) {
            $jeda['waktu_jeda'] = date('H:i:s');

            $wkt_jd = $this->db->query("SELECT Tgl_Mulai,waktu_lanjut,selisih_waktu FROM tr_tugas WHERE id = '".$this->session->userdata('tugas_terakhir')."'");
            foreach ($wkt_jd->result() as $key) {
                if ($key->waktu_lanjut != "00:00:00") {
                    $jeda['selisih_waktu'] = (strtotime($jeda['waktu_jeda']) - strtotime($key->waktu_lanjut)) + $key->selisih_waktu;
                }else{
                    $jeda['selisih_waktu'] = (strtotime($jeda['waktu_jeda']) - strtotime($key->Tgl_Mulai)) + $key->selisih_waktu;
                }
            }
            $this->db_helpdesk->update_data('tr_tugas','id',$this->session->userdata('tugas_terakhir'),$jeda);
            $this->session->unset_userdata('tugas_terakhir');
        }
	}

	public function cek_login(){
		if ($this->session->userdata('loginin') == "") {
    		redirect('help_desk/index');
    	}
	}

	public function index()
	{
		if ($this->session->userdata('loginin') != "") {
			// $this->db->where('Tgl_Input >=', date('Y-m-d').' 08:00:00');
   //      	$this->db->where('Tgl_Input <=', date('Y-m-d').' 23:59:00');
        	$this->db->where('status !=', "S");
			$d['jum_keluhan'] = $this->db->get('tr_tugas')->num_rows();
            

            $data['content'] = $this->load->view('daftar_keluhan', $d, TRUE);
            if ($this->session->userdata('level') == "2") {
                $d['kategori'] = $this->db->get('kategori');
                $data['content'] = $this->load->view('input_keluhan', $d, TRUE);
            }
		}else{
			redirect('help_desk/login');
		}

        $data['kategori'] = $this->db->get('kategori');
		
		$this->load->view('index', $data);
	}

	public function login(){
		$this->load->view('login');
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('help_desk/index'));
	}

	public function login_auth(){
		$u = $this->input->post('username');
		$p = $this->input->post('password');

		$this->db_helpdesk->login_auth($u,$p);
	}

	public function profil(){
		$this->cek_login();
        $bulan_depan = mktime(0,0,0, date("m")+1, date("d"), date("Y"));

        $this->db->select('User_Selesai');
        $this->db->where('User_Selesai', $this->session->userdata('username'));
        $this->db->where('Tgl_Input >=', date('Y-m-01'));
        $this->db->where('Tgl_Input <', date("Y-m-01", $bulan_depan));
        $d['tbulan'] = $this->db->get('tr_tugas')->num_rows();

        $this->db->select('id,Tgl_Input,Nama,kategori,Uraian,orang,Tgl_Mulai,Tgl_Selesai,User_Mulai,User_Selesai');
        $this->db->where('User_Selesai', $this->session->userdata('username'));
        $this->db->where('Tgl_Input >=', date('Y-m-01'));
        $this->db->where('Tgl_Input <', date("Y-m-01", $bulan_depan));
        $d['d_tbulan'] = $this->db->get('tr_tugas');

        $this->db->select('User_Selesai');
        $this->db->where('User_Selesai', $this->session->userdata('username'));
        $this->db->where('Tgl_Input >=', date('Y-m-d').' 08:00:00');
        $this->db->where('Tgl_Input <=', date('Y-m-d').' 23:59:00');
        $d['thari'] = $this->db->get('tr_tugas')->num_rows();

        $this->db->select('id,Tgl_Input,Nama,kategori,Uraian,orang,Tgl_Mulai,Tgl_Selesai,User_Mulai,User_Selesai');
        $this->db->where('User_Selesai', $this->session->userdata('username'));
        $this->db->where('Tgl_Input >=', date('Y-m-d').' 08:00:00');
        $this->db->where('Tgl_Input <=', date('Y-m-d').' 23:59:00');
        $d['d_thari'] = $this->db->get('tr_tugas');

        $this->db->select('User_Selesai');
        $this->db->where('Tgl_Input >=', date('Y-m-d').' 08:00:00');
        $this->db->where('Tgl_Input <=', date('Y-m-d').' 23:59:00');
        $d['thlayanan'] = $this->db->get('tr_tugas')->num_rows();

        $this->db->select('User_Selesai');
        $this->db->where('Tgl_Input >=', date('Y-m-d').' 08:00:00');
        $this->db->where('Tgl_Input <=', date('Y-m-d').' 23:59:00');
        $this->db->where('status !=', "S");
        $d['slayanan'] = $this->db->get('tr_tugas')->num_rows();

		$data['content'] = $this->load->view('profil', $d, TRUE);

        $data['kategori'] = $this->db->get('kategori');
		$this->load->view('index', $data);
	}

	public function daftar_layanan(){

        $list = $this->data_tb->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $customers) {

        	if ($customers->Status == "R") {
        		$aksi = '<a href="'.base_url('help_desk/tangani_layanan/'.$customers->id.'/'.$this->session->userdata('username')).'" class="btn btn-primary"><i class="fa fa-comments-o"></i> Tangani Keluhan</a>';
        	}
        	elseif ($customers->Status == "P") {
        		if ($customers->User_Mulai == $this->session->userdata('username')) {
        			$aksi = '<a href="'.base_url('help_desk/lanjutkan_layanan/'.$customers->id.'/'.$this->session->userdata('username')).'" class="btn btn-success"><i class="fa fa-play-circle"></i> Lanjutkan</a>';
        		}else{
        			$aksi = '<button class="btn btn-warning disabled"><i class="fa fa-spinner"></i> Sedang Di Proses</button>';
        		}
        	}
        	elseif ($customers->Status == "A") {
                if($customers->User_Alih == ""){
                    $aksi = '<a href="'.base_url('help_desk/ambil_alih/'.$customers->id).'" class="btn btn-danger"><i class="fa fa-exclamation"></i> Di Alihkan</a>';
                }elseif ($customers->User_Alih == $this->session->userdata('username')) {
                    $aksi = '<a href="'.base_url('help_desk/lanjutkan_layanan/'.$customers->id.'/'.$this->session->userdata('username')).'" class="btn btn-success"><i class="fa fa-play-circle"></i> Lanjutkan</a>';
                }else{
                    $aksi = '<a href="'.base_url('help_desk/lanjutkan_layanan/'.$customers->id).'" class="btn btn-danger"><i class="fa fa-exclamation"></i> Di Alihkan</a>';
                }
        	}

            if ($this->session->userdata('level') == "0") {
                $aksi .= '<a onclick="javascript: return confirm(\'Anda Yakin Ingin Menghapus Tugas Ini?\')" href="'.base_url('super_admin/hapus_tugas/'.$customers->id).'" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>';
            }

            if($this->session->userdata('kd_div') == "1") {
                if ($customers->Status == "R") {
                    $aksi = "<a href='".base_url('help_desk/lanjutkan_layanan/'.$customers->id)."' style='color: Red'>Belum Di Proses</a>";
                }elseif ($customers->Status == "P" ||$customers->Status == "A") {
                    $aksi = "<a href='".base_url('help_desk/lanjutkan_layanan/'.$customers->id)."' style='color: Blue'>Sedang Di Proses</a>";
                }else{
                    $aksi = "<a href='".base_url('help_desk/lanjutkan_layanan/'.$customers->id)."' style='color: Green'>Telah Selesai Di Proses</a>";
                }
            }

            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $customers->Tgl_Input;
            $row[] = $customers->Nama;
            $row[] = $customers->divisi;
            $row[] = $customers->kategori;
            if ($this->session->userdata('level') == "0") {
            	$row[] = $customers->User_Mulai;
            }
            $row[] = $customers->Uraian;
            $row[] = $aksi;
 
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->data_tb->count_all(),
                        "recordsFiltered" => $this->data_tb->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }

    public function register_layanan(){

    	$d['Tgl_Input'] = date('Y-m-d H:i:s');
    	$d['Nama'] = $this->input->post('nama');
    	$d['divisi'] = $this->session->userdata('divisi');
    	$d['kategori'] = $this->input->post('kategori');
    	$d['Uraian'] = $this->input->post('uraian');
        $d['user'] = $this->session->userdata('username');
    	$d['Status'] = "R";
        $d['kd_div'] = "0";
        if (!empty($this->session->userdata('kd_div'))) {
            $d['kd_div'] = $this->session->userdata('kd_div');
        }
        // if (!empty($this->input->post('btn_urg'))) {
        //     $d['id'] = time();
        // }

        $status = "";
        $msg = "";
        if (!empty($_FILES['Foto']['name'])) {
            
            $config['upload_path'] = './assets/img/upload/';
            $config['allowed_types'] = 'jpg|jpeg|png|jp2|zip|rar|php|xlsx|html|xls|pdf';
            $config['max_size'] = '2000';
            $config['max_width'] = '2400';
            $config['max_height'] = '2400'; 
            $config['overwrite'] = TRUE;    
            $config['file_name'] = time();     
            $this->load->library('upload', $config);

            $this->upload->initialize($config);

            if($this->upload->do_upload('Foto')){
                $aa = $this->upload->data();
                $ori = $aa['file_name'];
                $d['file'] = $ori;
            }else{
                $status = 'error';
                $msg = $this->upload->display_errors('', '');
            }
        }

    	$this->db_helpdesk->insert_data('tr_tugas', $d);

        if ($status == 'error') {
            echo json_encode(array('status' => $status, 'msg' => $msg));
        }else{
            redirect('help_desk/index');
            // if (!empty($this->input->post('btn_urg'))) {
            //     redirect('help_desk/tangani_layanan/'.$d['id'].'/'.$this->session->userdata('username'));
            // }else{
                
            // }
        }
    }

    public function selesai_layanan($id,$user){

    	$d['Tgl_Selesai'] = date('Y-m-d H:i:s');
    	$d['User_Selesai'] = $this->session->userdata('username');
    	$d['Status'] = "S";

        $cek = $this->db->query("SELECT waktu_lanjut, Tgl_Mulai, selisih_waktu FROM tr_tugas WHERE id = '$id'");
        foreach ($cek->result() as $key) {
            if ($key->waktu_lanjut != "00:00:00") {
                $d['selisih_waktu'] = (strtotime($d['Tgl_Selesai']) - strtotime($key->waktu_lanjut)) + $key->selisih_waktu;
            }else{
                $d['selisih_waktu'] = (strtotime($d['Tgl_Selesai']) - strtotime($key->Tgl_Mulai)) + $key->selisih_waktu;
            }
        }

    	$this->db_helpdesk->update_data('tr_tugas','id',$id,$d);

    	redirect('help_desk/index');
    }

    public function alihkan_layanan($id){

    	$d['Status'] = "A";
        $d['waktu_jeda'] = "00:00:00";
        $d['waktu_lanjut'] = "00:00:00";
        $d['selisih_waktu'] = "0";
        $d['User_Alih'] = "";

    	$this->db_helpdesk->update_data('tr_tugas','id',$id,$d);

    	redirect('help_desk/index');
    }

    public function ambil_alih($id){
        $d['User_Alih'] = $this->session->userdata('username');
        $d['Tgl_Mulai'] = date('Y-m-d H:i:s');

        $this->db_helpdesk->update_data('tr_tugas','id',$id,$d); 

        redirect('help_desk/lanjutkan_layanan/'.$id);  
    }

    public function lanjutkan_layanan($id,$user = NULL){
    	$this->cek_login();
        $this->read_komentar($id);
        $sess_data['tugas_terakhir'] = $id;
        $this->session->set_userdata($sess_data);


    	$this->db->select('Tgl_Input,Nama,kategori,Uraian,orang,Status,file,User_Alih,User_Mulai,selisih_waktu');
    	$this->db->where('id', $id);
    	$tr_tugas = $this->db->get('tr_tugas');
    	foreach ($tr_tugas->result() as $row) {
            if ($row->selisih_waktu != "0") {
                $this->db_helpdesk->update_data('tr_tugas','id',$id,array('waktu_lanjut' => date('H:i:s')));
            }
            
    		$a['Tgl_Input'] = $row->Tgl_Input;
    		$a['Nama'] = $row->Nama;
            $a['User_Mulai'] = $row->User_Mulai;
            $a['User_Alih'] = $row->User_Alih;
    		$a['kategori'] = $row->kategori;
    		$a['Uraian'] = $row->Uraian;
    		$a['orang'] = $row->orang;
    		$a['Status'] = $row->Status;
    		$a['file'] = $row->file;
    	}

        $this->db->where('Id_Tugas', $id);
        $this->db->order_by('Tgl_Komentar', 'DESC');
        $a['Komentar'] = $this->db->get('detil_tr_tugas', 0, 25);

        $this->db->where('Id_Tugas', $id);
        $a['jum_komentar'] = $this->db->get('detil_tr_tugas')->num_rows();

    	$data['content'] = $this->load->view('detail_tugas', $a, TRUE);
        $data['kategori'] = $this->db->get('kategori');
    	$this->load->view('index', $data);
    }

    public function tangani_layanan($id,$user){
    	$this->cek_login();
        $this->read_komentar($id);
        $sess_data['tugas_terakhir'] = $id;
        $this->session->set_userdata($sess_data);

    	$d['Tgl_Mulai'] = date('Y-m-d H:i:s');
    	$d['Status'] = "P";
    	$d['User_Mulai'] = $user;

    	$this->db_helpdesk->update_data('tr_tugas','id',$id,$d);

    	$this->db->select('Tgl_Input,Nama,kategori,Uraian,orang,Status,file,User_Alih,User_Mulai');
    	$this->db->where('id', $id);
    	$tr_tugas = $this->db->get('tr_tugas');
    	foreach ($tr_tugas->result() as $row) {
    		$a['Tgl_Input'] = $row->Tgl_Input;
    		$a['Nama'] = $row->Nama;
            $a['User_Mulai'] = $row->User_Mulai;
            $a['User_Alih'] = $row->User_Alih;
    		$a['kategori'] = $row->kategori;
    		$a['Uraian'] = $row->Uraian;
    		$a['orang'] = $row->orang;
    		$a['Status'] = $row->Status;
    		$a['file'] = $row->file;
    	}

        $this->db->where('Id_Tugas', $id);
        $this->db->order_by('Tgl_Komentar', 'DESC');
        $a['Komentar'] = $this->db->get('detil_tr_tugas', 0, 25);

        $this->db->where('Id_Tugas', $id);
        $a['jum_komentar'] = $this->db->get('detil_tr_tugas')->num_rows();

    	$data['content'] = $this->load->view('detail_tugas', $a, TRUE);
        $data['kategori'] = $this->db->get('kategori');

    	$this->load->view('index', $data);
    }

    public function komentar($id,$user){
        $d['Tgl_Komentar'] = date('Y-m-d H:i:s');
        $d['Id_Tugas'] = $id;
        $d['Komentar'] = $this->input->post('komentar');
        $d['Nama_User'] = $user;
        $d['Nama_User_L'] = $this->session->userdata('Nama');

        $status = "";
        $msg = "";
        if (!empty($_FILES['Foto']['name'])) {

            $config['upload_path'] = './assets/img/upload/';
            $config['allowed_types'] = 'jpg|jpeg|png|jp2|zip|rar|php|xlsx|html|xls|pdf';
            $config['max_size'] = '2000';
            $config['max_width'] = '5000';
            $config['max_height'] = '5000'; 
            $config['overwrite'] = TRUE;    
            $config['file_name'] = time();     
            $this->load->library('upload', $config);

            $this->upload->initialize($config);

            if($this->upload->do_upload('Foto')){
                $aa = $this->upload->data();
                $ori = $aa['file_name'];
                $d['file'] = $ori;
            }else{
                $status = 'error';
                $msg = $this->upload->display_errors('', '');
            }
        }

        if ($status == 'error') {
            echo json_encode(array('status' => $status, 'msg' => $msg));
        }else{
            $a = $this->db->query("SELECT Nama_User FROM detil_tr_tugas WHERE Id_Tugas = '$id' AND Nama_User != '$user' GROUP BY Nama_User");
            $b = $a->num_rows();
            echo $b;
            if ($b > 0) {
                $inbox['id_tr_tugas'] = $id;
                $inbox['msg_from'] = $user;
                $inbox['msg'] = substr($this->input->post('komentar'), 0, 59);
                $inbox['time_send'] = date('H:i:s');
                $inbox['date_send'] = date('Y-m-d');
                foreach ($a->result() as $key) {
                    $inbox['send_to'] = $key->Nama_User;
                    $c = $this->db->query("SELECT id_inbox FROM inbox WHERE id_tr_tugas = '$id' AND msg_from = '$user' AND status = 'D' AND send_to = '".$key->Nama_User."'");
                    $c2 = $c->num_rows();
                    if ($c2 > 0) {
                        foreach ($c->result() as $upd) {
                            $upd_inbox['msg'] = substr($this->input->post('komentar'), 0, 27);
                            $upd_inbox['time_send'] = time();
                            $upd_inbox['date_send'] = date('Y-m-d');
                            $this->db_helpdesk->update_data('inbox','id_inbox',$upd->id_inbox,$upd_inbox);
                        }
                    }else{
                        $this->db_helpdesk->insert_data('inbox', $inbox);
                    }
                }
            }

            $this->db_helpdesk->insert_data('detil_tr_tugas', $d);
            redirect(base_url('help_desk/lanjutkan_layanan/'.$id));
        }
    }

    public function read_komentar($id){
        $this->db->where('id_tr_Tugas', $id);
        $this->db->where('status', 'D');
        $this->db->where('send_to ', $this->session->userdata('username'));
        $this->db->update('inbox', array('status' => 'R'));
    }

    public function simpan_foto()
    {   
        $cek = $this->session->userdata('loginin');
        if(!empty($cek)){
            $status = "";
            $msg = "";
            $file_element_name = 'Foto';
            $key_user = $this->session->userdata('username');
            if (empty($key_user)){
              $status = "error";
              $msg = "Nomor Daftar Kosong";
            }
           
        if ($status != "error"){   
            
            $config['upload_path'] = './assets/img/foto_user/';
            $config['allowed_types'] = 'jpg|jpeg|png|jp2';
            $config['max_size'] = '2000';
            $config['max_width'] = '2400';
            $config['max_height'] = '2400'; 
            $config['overwrite'] = TRUE;    
            $config['file_name'] = $this->session->userdata('username');     
            $this->load->library('upload', $config);
            
            $this->upload->initialize($config);

            if($this->upload->do_upload('Foto')){
                    $aa = $this->upload->data();
                    $ori = $aa['file_name'];
                    $d['file'] = $ori;
                    $id['nama']= $this->session->userdata('username');
                    $this->db->where('Nama', $this->session->userdata('username'));
                    $file_id = $this->db->update("user",$d);
                     
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = './assets/img/foto_user/'.$ori;
                    $config['maintain_ratio'] = TRUE;
                    $config['width']     = '150';
                    $config['height']   = '150';
                
                    $this->load->library('image_lib', $config); 
                    $this->image_lib->resize();
                    
                    $status = "success";
                    $msg = "File Berhasil diupload";
                    @unlink($_FILES[$file_element_name]);
            }else{
                    $status = 'error';
                    $msg = $this->upload->display_errors('', '');
            }
        }

            echo json_encode(array('status' => $status, 'msg' => $msg));
            $alert_msg = '
            	<div class="alert alert-success alert-dismissable">
				  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				  <strong>Sukses!</strong> Gambar Profil Anda Telah Di Perbarui.
				</div>
            ';
            if ($status == "error") {
            	$alert_msg = '
	            	<div class="alert alert-danger alert-dismissable">
					  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  <strong>Gagal!</strong> Gambar Profil Anda Gagal Di Perbarui. Periksa Lebar Dan Tinggi Foto Anda (150px X 150px) Dan Besar File Tidak Lebih Dari 2MB!. 
					</div>
	            ';
            }else{
            	$alert_msg = '
	            	<div class="alert alert-success alert-dismissable">
					  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  <strong>Sukses!</strong> Gambar Profil Anda Telah Di Perbarui. Silahkan Login Kembali Untuk Melihat Perubahan.
					</div>
	            ';
            }
            $this->session->set_flashdata('alert_foto',$alert_msg);
            redirect(base_url('help_desk/profil#tab_1_3'));
            // echo "<form method='POST' action='".base_url('awal/simpan_foto')."' enctype='multipart/form-data'>";
            // echo "<br><br><br>".base_url('peserta/foto/')." == ".$this->session->userdata('nim')."<br>

            //  <input type='file' name='Foto' id='Foto'><input type='submit' value='upload'>

            // ";
            // echo "</form>";  
        }else{
            redirect(base_url('help_desk'));
        }   
    }

    public function ganti_password($user){
    	$password = $this->input->post('pw');
    	$password2 = $this->input->post('pwc');

    	if ($password == $password2) {

    		$query = $this->db->query("UPDATE user SET Password = LEFT(PASSWORD('$password'),10) WHERE Nama = '$user'");

    		if ($query) {
	    		$alert_msg = '
	    			<div class="alert alert-success alert-dismissable">
					  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  <strong>Berhasil!</strong> Password Telah Berubah. 
					</div>
	    		';
	    	}else{
	    		$alert_msg = '
	    			<div class="alert alert-danger alert-dismissable">
					  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  <strong>Gagal!</strong> '.$this->db->error().'. 
					</div>
	    		';
	    	}
    	}else{
    		$alert_msg = '
    			<div class="alert alert-danger alert-dismissable">
				  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				  <strong>Gagal!</strong> Password Yang Dimasukan Tidak Sama! 
				</div>
    		';
    	}

    	$this->session->set_flashdata('alert_pengaturan',$alert_msg);

    	redirect(base_url('help_desk/profil#tab_1_5'));
    }
}
