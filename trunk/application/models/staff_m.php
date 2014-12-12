<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Staff_m extends CI_Model {
	public function get_a_staff($id){
		$data = array();
    	$this->db->where('id_staff',$id);
    	$this->db->limit(1);
    	$Q = $this->db->get('tbstaff');
    	if ($Q->num_rows() > 0){
    	  $data = $Q->row_array();
    	}

    	$Q->free_result();
    	return $data;
	}

	public function get_staff(){
		$this->db->order_by('nm_staff');
		$rs = $this->db->get('tbstaff');

		return $rs->result();
	}

	function insert_staff($data){
		$this->db->insert('tbstaff', $data);

		redirect(base_url('admin/staff/daftarstaff'));
	}


	public function delete_staff($id){
		$this->db->where('id_staff', $id);
		$this->db->delete('tbstaff');
	}

	function select_all(){
		$this->db->select('*');
		$this->db->from('tbstaff');
		$this->db->order_by('date_modified', 'desc');

		return $this->db->get();
	}

	function select_by_id($id_staff){
		$this->db->select('*');
		$this->db->from('tbstaff');
		$this->db->where('id_staff', $id_staff);

		return $this->db->get();
	}

	function update_staff($id_staff, $data){
		$this->db->where('id_staff', $id_staff);
		$this->db->update('tbstaff', $data);
	}
}