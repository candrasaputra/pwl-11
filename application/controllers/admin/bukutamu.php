<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Bukutamu extends MY_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('bukutamu_m');
    }

	public function index(){		
		$this->data['bukutamu'] = $this->bukutamu_m->get_bukutamu();
		$this->data['page']  = 'admin/bukutamu/bukutamu';
		$this->data['title'] = 'Buku Tamu';

		$this->load->view('admin/index', $this->data);

	}

	public function delete($id){
		$this->bukutamu_m->delete_bukutamu($id);
		//$this->session->set_flashdata('message','Post deleted');
		redirect('admin/bukutamu','refresh');
	}

	public function publish($id){
		$data['stats_bt'] = "publish";
		$id_bt=$id;

		$this->bukutamu_m->update_bukutamu($id_bt, $data);

		redirect('admin/bukutamu','refresh');
	}

	public function draff($id){
		$data['stats_bt'] = "draff";
		$id_bt=$id;

		$this->bukutamu_m->update_bukutamu($id_bt, $data);

		redirect('admin/bukutamu','refresh');
	}
}