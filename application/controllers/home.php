<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('agenda_m');
        $this->load->model('info_m');
    }

	public function index()
	{
		$this->data['agenda'] = $this->agenda_m->get_agenda();
		$this->data['info'] = $this->info_m->get_info();
		$this->load->view('page/home', $this->data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */