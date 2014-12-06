<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Profile_m extends CI_Model {

	function select_by_id(){
		$this->db->select('*');
		$this->db->from('tbprofile');
		$this->db->where('id_profile', '1');

		return $this->db->get();
	}

	public function get_profile(){
		$this->db->order_by('tgl_bt');
		$rs = $this->db->get('tbprofile');

		return $rs->result();
	}

    function insert_profile($data){
		$this->db->insert('tbprofile', $data);
	}

	function select_all(){
		$this->db->select('*');
		$this->db->from('tbprofile');

		return $this->db->get();
	}

	function update_profile($id_profile, $data){
		$this->db->where('id_profile', $id_profile);
		$this->db->update('tbprofile', $data);
	}
}