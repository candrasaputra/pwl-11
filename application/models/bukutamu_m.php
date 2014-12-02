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

	function update_bukutamu(){
	$data = array( 
		'id_bt' => $this->input->post('id_bt'),
		'stats_bt' => $this->input->post('stats_bt'),

	);

 	$this->db->where('id_bt', $this->input->post('id_bt'));
	$this->db->update('tbbukutamu', $data);	
 
	}

	public function delete_bukutamu($id){
		$this->db->where('id_bt', $id);
		$this->db->delete('tbbukutamu');
	}
}