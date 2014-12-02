<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Agenda extends MY_Controller{

	public function tambahagenda(){

		$this->data['page']  = 'tambahartikel';
		$this->data['title'] = 'Tambah Artikel';

		$this->load->view('admin/artikel/tambahartikel', $this->data);

	}
}