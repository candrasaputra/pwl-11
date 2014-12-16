<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Info_m extends CI_Model {
	public function get_a_info($id){
		$data = array();
    	$this->db->where('id_info',$id);
    	$this->db->limit(1);
    	$Q = $this->db->get('tbinfo');
    	if ($Q->num_rows() > 0){
    	  $data = $Q->row_array();
    	}

    	$Q->free_result();
    	return $data;
	}

	public function get_info(){
		$this->db->order_by('tgl_info');
		$rs = $this->db->get('tbinfo');

		return $rs->result();
	}

	function insert_info($data){
		$this->db->insert('tbinfo', $data);
	}


	public function delete_info($id){
		$this->db->where('id_info', $id);
		$this->db->delete('tbinfo');
	}

	function select_all(){
		$this->db->select('*');
		$this->db->from('tbinfo');
		$this->db->order_by('date_modified', 'desc');

		return $this->db->get();
	}

	function select_by_id($id_info){
		$this->db->select('*');
		$this->db->from('tbinfo');
		$this->db->where('id_info', $id_info);

		return $this->db->get();
	}

	function update_info($id, $data){
		$this->db->where('id_bt', $id);
		$this->db->update('tbinfo', $data);
	}
}