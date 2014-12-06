<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Agenda extends MY_Controller{

	public function tambahagenda(){

		$this->data['page']  = 'admin/agenda/tambahagenda';
		$this->data['title'] = 'Tambah Agenda';

		$this->load->view('admin/index', $this->data);
	}

	public function semuaagenda(){

		$this->data['page']  = 'admin/agenda/semuaagenda';
		$this->data['title'] = 'Semua Agenda';

		$this->load->view('admin/index', $this->data);
	}
}