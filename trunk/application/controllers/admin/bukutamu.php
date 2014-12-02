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

	function edit($id=0){
  	if ($this->input->post('id_bk')){
  		$this->bukutamu_m->update_bukutamu();
  		//$this->session->set_flashdata('message','Post updated');
  		redirect('admin/bukutamu','refresh');
  	}else{
		$this->data['bukutamu'] = $this->bukutamu_m->get_a_bukutamu($id);
		$this->data['page']  = 'admin/bukutamu/edit_bukutamu';
		$this->data['title'] = 'Edit Buku Tamu';
		
		//$data['cats']  = $this->mcats->getCategoriesDropDown();
		
		$this->load->view('admin/index', $this->data);
	}
    }

	public function delete($id){
		$this->bukutamu_m->delete_bukutamu($id);
		//$this->session->set_flashdata('message','Post deleted');
		redirect('admin/bukutamu','refresh');
	}
}