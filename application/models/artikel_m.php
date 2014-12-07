<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Artikel_m extends CI_Model {
	public function get_a_artikel($id){
		$data = array();
    	$this->db->where('id_bt',$id);
    	$this->db->limit(1);
    	$Q = $this->db->get('tbartikel');
    	if ($Q->num_rows() > 0){
    	  $data = $Q->row_array();
    	}

    	$Q->free_result();    
    	return $data; 
	}

	public function get_artikel(){

		$this->db->order_by('tgl_bt');
		$rs = $this->db->get('tbartikel');

		return $rs->result();
	}

	public function get_kategori(){

		$this->db->order_by('kd_kat_artikel');
		$rs = $this->db->get('tbkat_artikel');

		return $rs->result();
	}

	public function get_artikel_publish(){

		$this->db->order_by('tgl_bt');
		$this->db->where('stats_bt', "publish");
		$rs = $this->db->get('tbartikel');

		return $rs->result();
	}

	public function delete_artikel($id){
		$this->db->where('id_bt', $id);
		$this->db->delete('tbartikel');
	}

	function insert_artikel($data){
		$this->db->insert('tbartikel', $data);
	}

	function select_all(){
		$this->db->select('*');
		$this->db->from('tbartikel');
		$this->db->order_by('date_modified', 'desc');

		return $this->db->get();
	}

	function select_by_id($id_bt){
		$this->db->select('*');
		$this->db->from('tbartikel');
		$this->db->where('id_bt', $id_bt);

		return $this->db->get();
	}

	function update_artikel($id_bt, $data){
		$this->db->where('id_bt', $id_bt);
		$this->db->update('tbartikel', $data);
	}
}