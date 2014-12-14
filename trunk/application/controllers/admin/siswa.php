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

		$this->data['page']  = 'admin/siswa/daftarsiswa';
		$this->data['title'] = 'Daftar Siswa';

		$this->load->view('admin/index', $this->data);
	}

	public function kelas(){

		$this->data['page']  = 'admin/siswa/kelas';
		$this->data['title'] = 'Kelas';

		$this->load->view('admin/index', $this->data);
	}
}