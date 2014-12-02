<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Infosekolah extends MY_Controller{

	public function tambahinfo(){

		$this->data['page']  = 'tambahartikel';
		$this->data['title'] = 'Tambah Artikel';

		$this->load->view('admin/artikel/tambahartikel', $this->data);

	}
}