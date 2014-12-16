<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {


	public function index(){
		$post = $this->input->post('submit');
		if($post){

			$this->load->model('account');

			$this->account->set_user($this->input->post('usr'));
			$this->account->set_password($this->input->post('pwd'));

			$this->form_validation->set_rules('usr', 'Nama Pengguna', 'required|alpha_dash');
			$this->form_validation->set_rules('pwd', 'Kata Sandi', 'required|alpha_dash');

			if ($this->form_validation->run() == FALSE){
				$data['error'] = validation_errors();
			}else{

				if($this->account->do_login()){
					header('location: '.site_url().'/admin');
				}else{
					$data['error'] = 'User dan Password tidak sesuai,<br />silahkan periksa kembali';
				}
			}	
		}else{

			$data['error']   = $this->session->flashdata('error');			
		}		

		$this->load->view('admin/login', $data);

	}

	public function logout(){
		$this->load->model('account');
		
		

		$this->account->do_logout();
		header('location: '.site_url().'/login');
	}

}	