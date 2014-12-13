<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Dashboard_m extends CI_Model {
	public function get_a_artikel($id){
		$data = array();
    	$this->db->where('id_artikel',$id);
    	$this->db->limit(1);
    	$Q = $this->db->get('tbartikel');
    	if ($Q->num_rows() > 0){
    	  $data = $Q->row_array();
    	}

    	$Q->free_result();    
    	return $data;
	}

	public function get_chat(){
		$this->db->join('tbadmin', 'tbchat.id_login = tbadmin.id_login');
		$this->db->order_by('tgl_chat','desc');
		$rs = $this->db->get('tbchat');

		return $rs->result();
	}
}