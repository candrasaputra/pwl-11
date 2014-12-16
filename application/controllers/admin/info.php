<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Info extends MY_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->model('info_m');
    }

	public function tambahinfo(){

		$this->data['page']  = 'admin/info/tambahinfo';
		$this->data['title'] = 'Tambah Info';

		$this->load->view('admin/index', $this->data);
	}

	public function proses_info(){
        date_default_timezone_set("Asia/Jakarta");
                
        $data['judul_info'] = $this->input->post('judul');
        $data['isi_info'] = $this->input->post('isi');
        $data['tgl_info'] = $this->input->post('tgl');
        $this->info_m->insert_info($data);
                
        redirect(base_url('admin/info/semuainfo'));
    }

	public function semuainfo(){
		$this->data['info'] = $this->info_m->get_info();

		$this->data['page']  = 'admin/info/semuainfo';
		$this->data['title'] = 'Semua Info';

		$this->load->view('admin/index', $this->data);
	}

	public function deleteinfo($id){
		$this->info_m->delete_info($id);
		//$this->session->set_flashdata('message','Post deleted');
		redirect('admin/info/semuainfo','refresh');
	}

	public function editinfo($id){
		$this->data['info'] = $this->info_m->select_by_id($id)->row();

		$this->data['page']  = 'admin/info/edit_info';
		$this->data['title'] = 'Semua Info';

		$this->load->view('admin/index', $this->data);
	}

	public function proses_edit_info(){
                
        $data['judul_info'] = $this->input->post('judul');
        $data['isi_info'] = $this->input->post('isi');
        $data['tgl_info'] = $this->input->post('tgl');

        $id = $this->input->post('kode');
        $this->info_m->update_info($id, $data);
                
        redirect(base_url('admin/info/semuainfo'));
    }
}