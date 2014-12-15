<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Siswa extends MY_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('siswa_m');
    }

	public function tambahsiswa(){

		$this->data['page']  = 'admin/siswa/tambahsiswa';
		$this->data['title'] = 'Tambah Siswa';

		$this->load->view('admin/index', $this->data);

	}

	public function daftarsiswa(){
		$this->data['siswa'] = $this->siswa_m->get_siswa();

		$this->data['page']  = 'admin/siswa/daftarsiswa';
		$this->data['title'] = 'Daftar Siswa';

		$this->load->view('admin/index', $this->data);
	}

	public function kelas(){
		$this->data['kelas'] = $this->siswa_m->get_kelas();

		$this->data['page']  = 'admin/siswa/kelas';
		$this->data['title'] = 'Kelas';

		$this->load->view('admin/index', $this->data);
	}

	public function deletesiswa($nik){
		$this->siswa_m->delete_siswa($nik);
		//$this->session->set_flashdata('message','Post deleted');
		redirect('admin/siswa/daftarsiswa','refresh');
	}

	public function deletekelas($id){
		$this->siswa_m->delete_kelas($id);
		//$this->session->set_flashdata('message','Post deleted');
		redirect('admin/siswa/kelas','refresh');
	}

	public function proses_kelas(){
        $data['kd_kelas'] = $this->input->post('kode');
        $data['nm_kelas'] = $this->input->post('nama');
        $this->siswa_m->insert_kelas($data);
                
        redirect(base_url('admin/siswa/kelas'));
    }
}