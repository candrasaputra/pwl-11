<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends MY_Controller{

	public function index(){

		$id = $this->data['cookie']['c_id'];

		$this->data['profile'] = $this->account->get_admin($id);
		$this->data['page']  = 'admin/profile/profile';
		$this->data['title'] = 'Profile';

		$this->load->view('admin/index', $this->data);

	}

	public function profil(){

	if ($this->input->post('title')){
  		$this->mposts->updatePost();
  		$this->session->set_flashdata('message','Post updated');
  		redirect('admin/posts/index','refresh');
  	}else{
		$data['judul'] = "Edit Post";
		$data['main'] = 'admin/posts_edit';
		$data['post'] = $this->mposts->getPost($id);
		$data['cats']  = $this->mcats->getCategoriesDropDown();
		$this->load->vars($data);
		$this->load->view('admin/dashboard');    
	}

	}
}