<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Artikel extends MY_Controller{

	public function tambahartikel(){

		$this->data['page']  = 'tambahartikel';
		$this->data['title'] = 'Tambah Artikel';

		$this->load->view('admin/artikel/tambahartikel', $this->data);

	}
}