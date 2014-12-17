<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('agenda_m');
        $this->load->model('info_m');
        $this->load->model('artikel_m');
    }

	public function index()
	{
		$this->data['agenda'] = $this->agenda_m->get_agenda();
		$this->data['info'] = $this->info_m->get_info();
		$this->data['artikel'] = $this->artikel_m->get_artikel_publish();
		$this->load->view('page/home', $this->data);
	}

	public function tampil($id){
		$this->data['agenda'] = $this->agenda_m->get_agenda();
		$this->data['info'] = $this->info_m->get_info();
		$this->data['artikel'] = $this->artikel_m->get_artikel_publish();

		$this->data['artikel'] = $this->artikel_m->select_by_id_artikel($id)->row();

		$this->load->view('page/tampilcontent', $this->data);
	}

	public function tampilagenda($id){
		$this->data['agenda'] = $this->agenda_m->get_agenda();
		$this->data['info'] = $this->info_m->get_info();
		$this->data['artikel'] = $this->artikel_m->get_artikel_publish();

		$this->data['agenda'] = $this->agenda_m->select_by_id($id)->row();
		
		$this->load->view('page/tampilagenda', $this->data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */