<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends MY_Controller{

	public function index(){

		$id = $this->data['cookie']['c_id'];

		$this->data['profile'] = $this->account->get_admin($id);
		$this->data['page']  = 'profile';
		$this->data['title'] = 'Profile';

		$this->load->view('admin/profile/profile', $this->data);

	}
}