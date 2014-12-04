<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Bukutamu_m extends CI_Model {
	public function get_a_bukutamu($id){
		$data = array();
    	$this->db->where('id_bt',$id);
    	$this->db->limit(1);
    	$Q = $this->db->get('tbbukutamu');
    	if ($Q->num_rows() > 0){
    	  $data = $Q->row_array();
    	}

    	$Q->free_result();    
    	return $data; 
	}

	public function get_bukutamu(){

		$this->db->order_by('tgl_bt');
		$rs = $this->db->get('tbbukutamu');

		return $rs->result();
	}

	public function get_bukutamu_publish(){

		$this->db->order_by('tgl_bt');
		$this->db->where('stats_bt', "publish");
		$rs = $this->db->get('tbbukutamu');

		return $rs->result();
	}

	public function delete_bukutamu($id){
		$this->db->where('id_bt', $id);
		$this->db->delete('tbbukutamu');
	}

	function insert_bukutamu($data){
		$this->db->insert('tbbukutamu', $data);
	}

	function select_all(){
		$this->db->select('*');
		$this->db->from('tbbukutamu');
		$this->db->order_by('date_modified', 'desc');

		return $this->db->get();
	}

	function select_by_id($id_bt){
		$this->db->select('*');
		$this->db->from('tbbukutamu');
		$this->db->where('id_bt', $id_bt);

		return $this->db->get();
	}

	function update_bukutamu($id_bt, $data){
		$this->db->where('id_bt', $id_bt);
		$this->db->update('tbbukutamu', $data);
	}

	function select_all_paging($limit=array()){
		$this->db->select('*');
		$this->db->from('tbbukutamu');
		$this->db->order_by('date_modified', 'desc');

		if ($limit != NULL)
			$this->db->limit($limit['perpage'], $limit['offset']);

		return $this->db->get();
	}
}