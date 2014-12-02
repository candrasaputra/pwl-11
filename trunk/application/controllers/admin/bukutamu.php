<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Bukutamu extends MY_Controller{

	public function index(){			
		$this->load->model('bukutamu_m');

		$this->data['bukutamu'] = $this->bukutamu_m->get_bukutamu();
		$this->data['page']  = 'admin/bukutamu/bukutamu';
		$this->data['title'] = 'Buku Tamu';

		$this->load->view('admin/index', $this->data);

	}
}