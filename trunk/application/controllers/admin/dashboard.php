<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends MY_Controller{
    

	public function index(){

		$this->data['page']  = 'home';
		$this->data['title'] = 'Dashboard';
		$this->load->view('admin/index', $this->data);

	}

	
}