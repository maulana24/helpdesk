<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_tb_model extends CI_Model {

	var $table = 'tr_tugas';
	var $column_order = array(null,'Tgl_Input', 'Nama', 'kategori','orang','Status', 'Uraian');
	var $column_search = array('Nama', 'kategori');
	var $order = array('Tgl_Input' => 'ASC');

	public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    private function _get_datatables_setting(){

    	// if($this->input->post('jur'))
     //    {
     //        $this->db->where('jurusan', $this->input->post('jur'));
     //    }
     //    if($this->input->post('seleksi'))
     //    {
     //        $this->db->where('Seleksi', $this->input->post('seleksi'));
     //    }
     //    if($this->input->post('strata'))
     //    {
     //        $this->db->where('strata', $this->input->post('strata'));
     //    }

		$this->db->from($this->table);
        // $this->db->where('Tgl_Input >=', date('Y-m-d').' 08:00:00');
        // $this->db->where('Tgl_Input <=', date('Y-m-d').' 23:59:00');
        $this->db->order_by('Tgl_Input', 'DESC');
        if ($this->session->userdata('kd_div') == "1") {
            $this->db->where('user', $this->session->userdata('username'));
            // $this->db->where('Tgl_Input >=', date('Y-m-d').' 02:00:00');
            // $this->db->where('Tgl_Input <=', date('Y-m-d').' 23:59:00');
        }else{
            $this->db->where('status !=', "S");
        }
		$i = 0;

		foreach ($this->column_search as $item) {
			if ($_POST['search']['value']) {
				if ($i === 0) {
					$this->db->group_start();
					$this->db->like($item, $_POST['search']['value']);
				}else{
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if (count($this->column_search) - 1 == $i) {
					$this->db->group_end();
				}
				
			}
			$i++;
		}

		if (isset($_POST['order'])) {
			$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		}else if(isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
	}

	function get_datatables(){
		$this->_get_datatables_setting();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
	}

	function count_filtered(){
        $this->_get_datatables_setting();
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all(){
        $this->db->from($this->table);
        $this->db->where('Tgl_Input >=', date('Y-d-m').' 08:00:00');
        $this->db->where('Tgl_Input <=', date('Y-d-m').' 23:59:00');
        $this->db->where('status !=', "S");
        return $this->db->count_all_results();
    }

    // public function get_list_jurusan(){
    //     $this->db->select('j.Kode,j.Nama_Indonesia');
    //     $this->db->from($this->table.' l');
    //     $this->db->join('jurusan j', 'l.jurusan = j.Kode', 'inner');
    //     $this->db->order_by('jurusan','asc');
    //     $this->db->group_by('jurusan');
    //     $query = $this->db->get();
    //     $result = $query->result();
 
    //     $jurusan = array();
    //     foreach ($result as $row) 
    //     {
    //         $jurusan[] = $row->Kode.'-'.$row->Nama_Indonesia;
    //     }
    //     return $jurusan;
    // }

    // public function get_list_fakultas(){
    //     $this->db->select('Kode,Singkatan,Nama_Indonesia');
    //     $this->db->from('fakultas');
    //     $this->db->order_by('Kode','asc');
    //     $query = $this->db->get();
    //     $result = $query->result();
 
    //     $jurusan = array();
    //     foreach ($result as $row) 
    //     {
    //         $jurusan[] = $row->Kode.'-'.$row->Singkatan.''.$row->Nama_Indonesia_F;
    //     }
    //     return $jurusan;
    // }
}