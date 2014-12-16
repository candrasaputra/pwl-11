<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Agenda extends MY_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('agenda_m');
    }

	public function tambahagenda(){

		$this->data['page']  = 'admin/agenda/tambahagenda';
		$this->data['title'] = 'Tambah Agenda';

		$this->load->view('admin/index', $this->data);
	}

	public function proses_agenda(){
        date_default_timezone_set("Asia/Jakarta");
                
        $data['judul_agenda'] = $this->input->post('judul');
        $data['isi_agenda'] = $this->input->post('isi');
        $data['tgl_agenda'] = $this->input->post('tgl');
        $this->agenda_m->insert_agenda($data);
                
        redirect(base_url('admin/agenda/semuaagenda'));
    }

	public function semuaagenda(){
		$this->data['agenda'] = $this->agenda_m->get_agenda();

		$this->data['page']  = 'admin/agenda/semuaagenda';
		$this->data['title'] = 'Semua Agenda';

		$this->load->view('admin/index', $this->data);
	}

	public function deleteagenda($id){
		$this->agenda_m->delete_agenda($id);
		//$this->session->set_flashdata('message','Post deleted');
		redirect('admin/agenda/semuaagenda','refresh');
	}

	public function editagenda($id){
		$this->data['agenda'] = $this->agenda_m->select_by_id($id)->row();

		$this->data['page']  = 'admin/agenda/edit_agenda';
		$this->data['title'] = 'Semua Agenda';

		$this->load->view('admin/index', $this->data);
	}

	public function proses_edit_agenda(){
                
        $data['judul_agenda'] = $this->input->post('judul');
        $data['isi_agenda'] = $this->input->post('isi');
        $data['tgl_agenda'] = $this->input->post('tgl');

        $id = $this->input->post('kode');
        $this->agenda_m->update_agenda($id, $data);
                
        redirect(base_url('admin/agenda/semuaagenda'));
    }
}