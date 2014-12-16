<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Agenda_m extends CI_Model {
	public function get_a_agenda($id){
		$data = array();
    	$this->db->where('id_agenda',$id);
    	$this->db->limit(1);
    	$Q = $this->db->get('tbagenda');
    	if ($Q->num_rows() > 0){
    	  $data = $Q->row_array();
    	}

    	$Q->free_result();
    	return $data;
	}

	public function get_agenda(){
		$this->db->order_by('tgl_agenda');
		$rs = $this->db->get('tbagenda');

		return $rs->result();
	}

	function insert_agenda($data){
		$this->db->insert('tbagenda', $data);
	}

	function update_agenda($id, $data){
		$this->db->where('id_agenda', $id);
		$this->db->update('tbagenda', $data);
	}

	public function delete_agenda($id){
		$this->db->where('id_agenda', $id);
		$this->db->delete('tbagenda');
	}

	function select_all(){
		$this->db->select('*');
		$this->db->from('tbagenda');
		$this->db->order_by('date_modified', 'desc');

		return $this->db->get();
	}

	function select_by_id($id){
		$this->db->select('*');
		$this->db->from('tbagenda');
		$this->db->where('id_agenda', $id);

		return $this->db->get();
	}
}