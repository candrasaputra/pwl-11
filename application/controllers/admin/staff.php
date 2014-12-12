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
                
        $data['nip_staff'] = $this->input->post('nip');
        $data['nm_staff'] = $this->input->post('nama');
        $data['jk_staff'] = $this->input->post('jk');
        $data['alamat_staff'] = $this->input->post('alamat');
        $data['telp_staff'] = $this->input->post('telp');
        $data['hp_staff'] = $this->input->post('hp');
        $data['email_staff'] = $this->input->post('email');
        $data['tgl_lahir_staff'] = $this->input->post('tgllahir');
        $data['tmp_lahir_staff'] = $this->input->post('tempatlahir');
        $data['tugas_staff'] = $this->input->post('tugas');
        $data['img_staff'] = $this->input->post('foto');
        $this->staff_m->insert_staff($data);
                
        redirect(base_url('admin/staff/daftarstaff'));
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