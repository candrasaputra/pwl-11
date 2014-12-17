<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('profile_m');
        $this->load->model('agenda_m');
    }

    public function index(){
    	$this->data['agenda'] = $this->agenda_m->get_agenda();
        $this->data['profile'] = $this->profile_m->select_by_id()->row();

        $this->load->view('page/profile', $this->data);

    }
}