<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Count_m extends CI_Model {
	public function count_artikel(){
		$rs = $this->db->count_all('tbartikel');
		return $rs;
	}

	public function count_agenda(){
		$rs = $this->db->count_all('tbagenda');
		return $rs;
	}

	public function count_info(){
		$rs = $this->db->count_all('tbinfo');
		return $rs;
	}

	public function count_bukutamu(){
		$rs = $this->db->count_all('tbbukutamu');
		return $rs;
	}



	public function count_siswa(){
		$this->db->where('status_siswa', 'aktif');
		$this->db->from('tbsiswa');
		$rs = $this->db->count_all_results();
		return $rs;
	}

	public function count_alumni(){
		$this->db->where('status_siswa', 'alumni');
		$this->db->from('tbsiswa');
		$rs = $this->db->count_all_results();
		return $rs;
	}

	public function count_staff(){
		$this->db->where('tugas_staff', 'staff');
		$this->db->from('tbstaff');
		$rs = $this->db->count_all_results();
		return $rs;
	}

	public function count_guru(){
		$this->db->where('tugas_staff', 'guru');
		$this->db->from('tbstaff');
		$rs = $this->db->count_all_results();
		return $rs;
	}
}