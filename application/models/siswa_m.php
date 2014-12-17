<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Siswa_m extends CI_Model {

	public function get_siswa(){
		$this->db->join('tbkelas', 'tbkelas.kd_kelas = tbsiswa.kd_kelas');
		$this->db->order_by('nik_siswa');
		$rs = $this->db->get('tbsiswa');

		return $rs->result();
	}

	public function get_kelas(){

		$this->db->order_by('nm_kelas');
		$rs = $this->db->get('tbkelas');

		return $rs->result();
	}

	public function delete_siswa($nik){
		$this->db->where('nik_siswa', $nik);
		$this->db->delete('tbsiswa');
	}

	function insert_siswa($data){
		$this->db->insert('tbsiswa', $data);
	}

	public function delete_kelas($id){
		$this->db->where('kd_kelas', $id);
		$this->db->delete('tbkelas');
	}

	function insert_kelas($data){
		$this->db->insert('tbkelas', $data);
	}

	function select_by_id_kelas($id){
		$this->db->select('*');
		$this->db->from('tbkelas');
		$this->db->where('kd_kelas', $id);

		return $this->db->get();
	}

	function update_kelas($id, $data){
		$this->db->where('kd_kelas', $id);
		$this->db->update('tbkelas', $data);
	}

	function select_by_id_siswa($id){
		$this->db->select('*');
		$this->db->from('tbsiswa');
		$this->db->where('nik_siswa', $id);

		return $this->db->get();
	}
}