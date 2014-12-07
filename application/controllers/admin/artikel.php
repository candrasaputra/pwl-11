<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Artikel extends MY_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('artikel_m');
    }

	public function tambahartikel(){

		$this->data['page']  = 'admin/artikel/tambahartikel';
		$this->data['title'] = 'Tambah Artikel';

		$this->load->view('admin/index', $this->data);

	}

	public function semuaartikel(){
		$this->data['artikel'] = $this->artikel_m->get_artikel();

		$this->data['page']  = 'admin/artikel/semuaartikel';
		$this->data['title'] = 'Semua Artikel';

		$this->load->view('admin/index', $this->data);
	}

	public function kategoriartikel(){
		$this->data['kategori'] = $this->artikel_m->get_kategori();

		$this->data['page']  = 'admin/artikel/kategori';
		$this->data['title'] = 'Kategori';

		$this->load->view('admin/index', $this->data);
	}

	public function deleteartikel($id){
		$this->artikel_m->delete_artikel($id);
		//$this->session->set_flashdata('message','Post deleted');
		redirect('admin/artikel/semuaartikel','refresh');
	}

	public function deletekategori($id){
		$this->artikel_m->delete_kategori($id);
		//$this->session->set_flashdata('message','Post deleted');
		redirect('admin/artikel/kategoriartikel','refresh');
	}
}