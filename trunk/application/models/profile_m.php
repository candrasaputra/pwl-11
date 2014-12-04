<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Profile_m extends CI_Model {
	function __construct(){
		function::__construct();

	}

    function insert_profile($data){
		$this->db->insert('tbprofile', $data);
	}

	function select_all(){
		$this->db->select('*');
		$this->db->from('tbprofile');
		$this->db->order_by('date_modified', 'desc');

		return $this->db->get();
	}

	function select_by_id($id_profile){
		$this->db->select('*');
		$this->db->from('tbprofile');
		$this->db->where('id_profile', $id_profile);

		return $this->db->get();
	}

	function update_profile($id_profile, $data){
		$this->db->where('id_profile', $id_profile);
		$this->db->update('tbprofile', $data);
	}

	function delete_profile($id_profile){
		$this->db->where('id_profile', $id_profile);
		$this->db->delete('tbprofile');
	}

	function select_all_paging($limit=array()){
		$this->db->select('*');
		$this->db->from('tbprofile');
		$this->db->order_by('date_modified', 'desc');

		if ($limit != NULL)
			$this->db->limit($limit['perpage'], $limit['offset']);

		return $this->db->get();
	}
}