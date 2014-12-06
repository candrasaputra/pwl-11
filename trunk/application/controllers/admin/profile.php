<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends MY_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->model('profile_m');
    }

	public function index(){		
		$this->data['profile'] = $this->profile_m->select_by_id()->row();
		$this->data['page']  = 'admin/profile/profile';
		$this->data['title'] = 'Profile';

		$this->load->view('admin/index', $this->data);

	}

	public function proses_edit_profile(){
		$data['judul_profile'] = $this->input->post('judul_profile');
		$data['isi_profile'] = $this->input->post('isi_profile');
		$id_profile=$this->input->post('id_profile');
		$this->profile_m->update_profile($id_profile, $data);
		redirect(site_url('admin/profile'));
	}
}