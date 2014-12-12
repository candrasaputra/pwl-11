<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Staff extends MY_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('staff_m');
    }

	public function tambahstaff(){

		

		$this->data['page']  = 'admin/staff/tambahstaff';
		$this->data['title'] = 'Tambah Staff';

		$this->load->view('admin/index', $this->data);

	}

	public function proses_staff(){
        date_default_timezone_set("Asia/Jakarta");
                
        $data['judul_artikel'] = $this->input->post('judul');
        $data['isi_artikel'] = $this->input->post('isi');
        $data['tgl_artikel'] = date("y-m-d H:i:s");
        $data['kd_kat_artikel'] = $this->input->post('kd_kat');
        $data['status_artikel'] = $this->input->post('status');
        $this->artikel_m->insert_artikel($data);
                
        redirect(base_url('admin/artikel/semuaartikel'));
    }

	public function daftarstaff(){
		$this->data['staff'] = $this->staff_m->get_staff();

		$this->data['page']  = 'admin/staff/daftarstaff';
		$this->data['title'] = 'Daftar Staff';

		$this->load->view('admin/index', $this->data);
	}

	public function tugas(){
		$this->data['kategori'] = $this->artikel_m->get_kategori();

		$this->data['page']  = 'admin/artikel/kategori';
		$this->data['title'] = 'Tugas';

		$this->load->view('admin/index', $this->data);
	}

	public function deletestaff($id){
		$this->artikel_m->delete_artikel($id);
		//$this->session->set_flashdata('message','Post deleted');
		redirect('admin/artikel/semuaartikel','refresh');
	}

	public function deletetugas($id){
		$this->artikel_m->delete_kategori($id);
		//$this->session->set_flashdata('message','Post deleted');
		redirect('admin/artikel/kategoriartikel','refresh');
	}
}