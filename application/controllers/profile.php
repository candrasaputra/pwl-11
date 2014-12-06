<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('profile_m');
    }

    public function index(){           
        $this->data['profile'] = $this->profile_m->select_by_id()->row();

        $this->load->view('page/profile', $this->data);

    }
}