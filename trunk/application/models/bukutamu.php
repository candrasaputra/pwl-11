<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Bukutamu extends CI_Model {

	public function get_bukutamu(){

		$this->db->order_by('tgl_bt');
		$rs = $this->db->get('tbbukutamu');

		return $rs->result();

	}

	public function count_bukutamu(){
	
		$rs = $this->db->count_all('tbbukutamu');

		return $rs;
	}

}