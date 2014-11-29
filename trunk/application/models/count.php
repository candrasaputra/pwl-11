<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Count extends CI_Model {
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

}