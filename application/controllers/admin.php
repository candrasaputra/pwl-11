<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	var $data;
	var $count_tbbukutamu;

	public function __construct(){
		parent::__construct();

		$this->output->enable_profiler(false);

		$this->load->model('account');

		if(!$this->account->validate_cookie()){
			$this->session->set_flashdata('error', 'Anda tidak mempunyai akses ke halaman ini');
			header('location: '.site_url().'/login');
		}else{

			$this->data['cookie'] = $this->account->get_cookie();
		}
	}

	public function index(){
		$this->load->model('count');
		$this->data['count_artikel']  = $this->count->count_artikel();
		$this->data['count_agenda']  = $this->count->count_agenda();
		$this->data['count_info']  = $this->count->count_info();
		$this->data['count_bukutamu']  = $this->count->count_bukutamu();

		$this->data['page']  = 'home';
		$this->data['title'] = 'Dashboard';
		$this->load->view('admin/dashboard', $this->data);

	}

	public function dashboard(){
		$this->load->model('count');
		$this->data['count_artikel']  = $this->count->count_artikel();
		$this->data['count_agenda']  = $this->count->count_agenda();
		$this->data['count_info']  = $this->count->count_info();
		$this->data['count_bukutamu']  = $this->count->count_bukutamu();

		$this->data['page']  = 'home';
		$this->data['title'] = 'Dashboard';
		$this->load->view('admin/dashboard', $this->data);

	}

	public function profile(){

		$id = $this->data['cookie']['c_id'];

		$this->data['profile'] = $this->account->get_admin($id);
		$this->data['page']  = 'profile';
		$this->data['title'] = 'Profile';

		$this->load->view('admin/pages/profile', $this->data);
	}

	public function negara(){

		$this->load->model('negara');

		$this->data['negara'] = $this->negara->get_negara();
		$this->data['page']  = 'negara';
		$this->data['title'] = 'Daftar Negara';

		$this->load->view('admin', $this->data);
	}

	public function siswa(){

		$this->load->model('siswa');		

		$this->data['siswa'] = $this->siswa->get_siswa();
		$this->data['page']  = 'siswa';
		$this->data['title'] = 'Daftar Siswa';

		$this->load->view('admin', $this->data);
	}

	public function bukutamu(){
		$this->load->model('bukutamu');		

		$this->data['bukutamu'] = $this->bukutamu->get_bukutamu();
		$this->data['page']  = 'bukutamu';
		$this->data['title'] = 'Daftar Buku Tamu';

		$this->load->view('admin/bukutamu', $this->data);
	}

	public function logout(){

		$this->account->do_logout();
		header('location: '.site_url().'/login');
	}
	
}		