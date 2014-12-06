<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Artikel extends MY_Controller{

	public function tambahartikel(){

		$this->data['page']  = 'admin/artikel/tambahartikel';
		$this->data['title'] = 'Tambah Artikel';

		$this->load->view('admin/index', $this->data);

	}

	public function semuaartikel(){
		$this->data['page']  = 'admin/artikel/semuaartikel';
		$this->data['title'] = 'Semua Artikel';

		$this->load->view('admin/index', $this->data);
	}

	public function kategoriartikel(){
		$this->data['page']  = 'admin/artikel/kategori';
		$this->data['title'] = 'Kategori';

		$this->load->view('admin/index', $this->data);
	}
}