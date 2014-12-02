<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Artikel extends MY_Controller{
	function index(){
		$this->data['page']  = 'admin/artikel/semuaartikel';
		$this->data['title'] = 'Tambah Artikel';

		$this->load->view('admin/index', $this->data);
	}

	public function tambahartikel(){

		$this->data['page']  = 'admin/artikel/tambahartikel';
		$this->data['title'] = 'Tambah Artikel';

		$this->load->view('admin/index', $this->data);

	}
}