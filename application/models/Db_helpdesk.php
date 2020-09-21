<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Db_helpdesk extends CI_Model {

	public function login_auth($u, $p){
		$q_cek_login = $this->db->query('SELECT * FROM user WHERE Nama = "'.$u.'" AND Password =  LEFT(PASSWORD("'.$p.'"),10)');
		if (count($q_cek_login->result()) > 0) {
			foreach ($q_cek_login->result_array() as $qck) {
				$sess_data['loginin'] = 'yes';
				$sess_data['username'] = $qck['Nama'];
				$sess_data['level'] = $qck['level'];
				$sess_data['kd_div'] = $qck['kd_div'];
				$sess_data['divisi'] = $qck['divisi'];
				$sess_data['foto'] = $qck['file'];
				$sess_data['Nama'] = $qck['Nama_Lengkap'];
				$sess_data['K_Level'] = $qck['ket_level'];
				$this->session->set_userdata($sess_data);
				header('location:'.base_url('help_desk/index'));
			}
		}else{
			// echo 'SELECT * FROM user WHERE Nama = "'.$u.'" AND Password =  LEFT(PASSWORD("'.$p.'"),10)';
			$this->session->set_flashdata('query', '
				<div class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button>
                    <span> Enter any username and password. </span>
                </div>
			');
			redirect(base_url('appwisuda/login'));
		}

	}

	public function insert_data($tb_name, $data){
		return $this->db->insert($tb_name, $data);
	}

	public function delete_data($primary, $tb_name, $row){
		return $this->db->delete($tb_name, array($row => $primary));
	}

	public function update_data($tb_name,$field,$primary,$data){
		$this->db->where($field, $primary);
		return $this->db->update($tb_name, $data);
	}

	public function select_data($tb_name, $where = NULL, $select = NULL){
		if ($select != NULL) {
			$this->db->select($select);
		}
		if ($where == NULL) {
			return $this->db->get($tb_name);
		}else{
			return $this->db->get_where($tb_name, $where);
		}
	}
}
