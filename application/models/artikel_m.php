<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Artikel_m extends CI_Model {
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

	public function get_artikel(){
		$this->db->join('tbkat_artikel', 'tbkat_artikel.kd_kat_artikel = tbartikel.kd_kat_artikel');
		$this->db->order_by('tgl_artikel', 'DESC');
		$rs = $this->db->get('tbartikel');

		return $rs->result();
	}

	public function get_artikel_publish(){
		$this->db->join('tbkat_artikel', 'tbkat_artikel.kd_kat_artikel = tbartikel.kd_kat_artikel');
		$this->db->order_by('tgl_artikel', 'DESC');
		$this->db->where('status_artikel', "publish");
		$rs = $this->db->get('tbartikel');

		return $rs->result();
	}

	function insert_artikel($data){
		$this->db->insert('tbartikel', $data);
	}


	public function delete_artikel($id){
		$this->db->where('id_artikel', $id);
		$this->db->delete('tbartikel');
	}

	function update_artikel($id, $data){
		$this->db->where('id_artikel', $id);
		$this->db->update('tbartikel', $data);
	}

	function select_by_id_artikel($id){
		$this->db->select('*');
		$this->db->from('tbartikel');
		$this->db->where('id_artikel', $id);

		return $this->db->get();
	}

	public function get_kategori(){

		$this->db->order_by('kd_kat_artikel');
		$rs = $this->db->get('tbkat_artikel');

		return $rs->result();
	}

	function insert_kategori($data){
		$this->db->insert('tbkat_artikel', $data);
	}

	function update_kategori($id, $data){
		$this->db->where('kd_kat_artikel', $id);
		$this->db->update('tbkat_artikel', $data);
	}

	public function delete_kategori($id){
		$this->db->where('kd_kat_artikel', $id);
		$this->db->delete('tbkat_artikel');
	}

	function select_by_id_kategori($id){
		$this->db->select('*');
		$this->db->from('tbkat_artikel');
		$this->db->where('kd_kat_artikel', $id);

		return $this->db->get();
	}

	function select_all(){
		$this->db->select('*');
		$this->db->from('tbartikel');
		$this->db->order_by('date_modified', 'desc');

		return $this->db->get();
	}
}