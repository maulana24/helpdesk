<?php
defined('BASEPATH') OR exit('No direct script access allowed');

date_default_timezone_set('Asia/Kuala_Lumpur');

class Super_admin extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('admin/data_tb_user','data_tb');
        $this->load->model('admin/data_tb_kategori','data_tb2');
	}

    public function cek_login(){
        if ($this->session->userdata('loginin') == "") {
            redirect('help_desk/index');
        }
    }

	public function index(){
		$this->cek_login();

        $d['tb_user'] = $this->db->get('user');
        $d['popup'] = $this->load->view('super_admin/popup','',TRUE);

        $data['content'] = $this->load->view('super_admin/setting',$d,TRUE);


        $data['kategori'] = $this->db->get('kategori');

        $this->load->view('index', $data);
	}

    public function tambah_user(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $namal = $this->input->post('namal');
        $level = $this->input->post('level');
        $kd_div = $this->input->post('kd_div');
        $divisi = $this->input->post('nm_div');

        if ($level == "1") {
            $k_level = "Admin";
        }else{
            $k_level = "Admin";
        }

        $query = $this->db->query("INSERT INTO user (`Nama`, `Password`, `Nama_Lengkap`, `level`, `ket_level`, `kd_div`,`divisi`) VALUES ('$username', LEFT(PASSWORD('".$password."'),10), '$namal', '$level', '$k_level', '$kd_div','$divisi')");

        if ($query) {
            $alert_msg = '
                <div class="alert alert-success alert-dismissable">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Berhasil!</strong> Pengguna Berhasil Di Tambahkan. 
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

        $this->session->set_flashdata('alert_admin',$alert_msg);

        redirect(base_url('super_admin/index'));
    }

    public function tambah_kategori(){
        $kd_kat = $this->input->post('kd_kat');
        $nm_kat = $this->input->post('nm_kat');

        $insert['kode_kategori'] = $kd_kat;
        $insert['nama_kategori'] = $nm_kat;

        $query = $this->db_helpdesk->insert_data('kategori', $insert);

        if ($query) {
            $alert_msg = '
                <div class="alert alert-success alert-dismissable">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Berhasil!</strong> Kategori Berhasil Di Tambahkan. 
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

        $this->session->set_flashdata('alert_kategori',$alert_msg);

        redirect(base_url('super_admin/index'));
    }

    public function hapus_tugas($id){
        $this->db_helpdesk->delete_data($id, 'tr_tugas', 'id');
        $alert_msg = '
            <div class="alert alert-success alert-dismissable">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>Berhasil!</strong> Tugas Berhasil Di Hapus Dari Daftar Tugas. 
            </div>
        ';
        $this->session->set_flashdata('alert_tugas',$alert_msg);
        redirect(base_url('help_desk/index'));
    }

    public function hapus_kategori($kode){
        $this->db_helpdesk->delete_data($kode, 'kategori', 'kode_kategori');
        $alert_msg = '
            <div class="alert alert-success alert-dismissable">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>Berhasil!</strong> Kategori Berhasil Di Hapus Dari Daftar Kategori. 
            </div>
        ';
        $this->session->set_flashdata('alert_kategori',$alert_msg);
        redirect(base_url('super_admin/index'));
    }

    public function hapus_user($nama){
        $this->db->where('Nama', $nama);
        $this->db->delete('user');
        $alert_msg = '
            <div class="alert alert-success alert-dismissable">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>Berhasil!</strong> Pengguna Berhasil Di Hapus. 
            </div>
        ';
        $this->session->set_flashdata('alert_admin',$alert_msg);
        redirect(base_url('super_admin/index'));
    }

    public function edit_data($tb_name, $id){

        $d_content['key'] = $id;

        if ($tb_name == "user") {
            $d_content['title'] = "Edit Data User";
            $d_content['edit'] = 1;
            $d_content['data'] = $this->db->get_where('user', array('Nama' => $id));
        }else{
            $d_content['title'] = "Edit Kategori Tugas";
            $d_content['edit'] = 2;
            $d_content['data'] = $this->db->get_where('kategori', array('kode_kategori' => $id));
        }

        $data['content'] = $this->load->view('super_admin/edit_data', $d_content, TRUE);

        $data['kategori'] = $this->db->get('kategori');

        $this->load->view('index', $data);
    }

    public function do_edit(){
        if ($this->input->post('btn_edit') == "2") {
            $data['nama_kategori'] = $this->input->post('nm_kat');
            $tb_name = 'kategori';
            $field = 'kode_kategori';
            $primary = $this->input->post('kd_kat');
            $alert_msg = '
                <div class="alert alert-success alert-dismissable">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Berhasil!</strong> Data Kategori Berhasil Di Ubah.
                </div>
            ';
            $this->session->set_flashdata('alert_kategori',$alert_msg);
        }else{
            if ($this->input->post('pass') != "") {
                $pass = $this->input->post('pass');
                $this->db->query("UPDATE user SET Password = LEFT(PASSWORD('".$pass."'),10) WHERE Nama = '".$this->input->post('nama')."'");
            }
            $data['Nama_Lengkap'] = $this->input->post('nm_lengkap');
            $data['level'] = $this->input->post('level');
            $data['ket_level'] = 'Admin';


            $tb_name = 'user';
            $field = 'Nama';
            $primary = $this->input->post('nama');
            $alert_msg = '
                <div class="alert alert-success alert-dismissable">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Berhasil!</strong> Data Pengguna Berhasil Di Ubah. 
                </div>
            ';
            $this->session->set_flashdata('alert_admin',$alert_msg);
        }

        $this->db_helpdesk->update_data($tb_name,$field,$primary,$data);
        redirect(base_url('super_admin/index'));
    }

    public function daftar_user(){

        $list = $this->data_tb->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $customers) {

            $disabled = "";
            if ($customers->Nama == $this->session->userdata('username')) {
               $disabled = "disabled";
            }

            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $customers->Nama_Lengkap;
            $row[] = $customers->ket_level;
            $row[] = $customers->divisi;
            $row[] = '
                    <a '.$disabled.' href="'.base_url('super_admin/edit_data/user/'.$customers->Nama).'" class="btn btn-primary"><i class/edit_data/user="fa fa-edit"></i> Edit Data Pengguna</a>
                    <a '.$disabled.' onclick="javascript: return confirm(\'Anda Yakin Ingin Menghapus Pengguna Ini?\')" href="'.base_url('super_admin/hapus_user/'.$customers->Nama).'" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus Pengguna</a>
            ';
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

    public function daftar_kategori(){

        $list = $this->data_tb2->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $customers) {

            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $customers->kode_kategori;
            $row[] = $customers->nama_kategori;
            $row[] = '
                    <a href="'.base_url('super_admin/edit_data/kategori/'.$customers->kode_kategori).'" class="btn btn-primary"><i class="fa fa-edit"></i> Edit Kategori</a>
                    <a onclick="javascript: return confirm(\'Anda Yakin Ingin Menghapus Kategori Ini?\')" href="'.base_url('super_admin/hapus_kategori/'.$customers->kode_kategori).'" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus Kategori</a>
            ';
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->data_tb2->count_all(),
                        "recordsFiltered" => $this->data_tb2->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }
}
