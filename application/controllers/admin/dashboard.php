<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends MY_Controller{
    function __construct()
	{
		parent::__construct();
		$this->load->model('dashboard_m');
    }

	public function index(){
		$this->data['chat'] = $this->dashboard_m->get_chat();

		$this->data['page']  = 'admin/dashboard/dashboard';
		$this->data['title'] = 'Dashboard';
		$this->load->view('admin/index', $this->data);

	}

	public function proses_chat(){
		$data['pesan_chat'] = $this->input->post('isi');
        $data['id_login'] = $this->input->post('id');

		$this->dashboard_m->insert_chat($data);
	}

	
}