<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Akun extends MY_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('account');
    }

	public function index(){		
		$this->data['akun'] = $this->account->get_account();
		$this->data['page']  = 'admin/akun/akun';
		$this->data['title'] = 'Akun';

		$this->load->view('admin/index', $this->data);

	}

	public function daftarakun(){		
		$this->data['akun'] = $this->account->get_account();
		$this->data['page']  = 'admin/akun/akun';
		$this->data['title'] = 'Akun';

		$this->load->view('admin/index', $this->data);

	}

	public function edit($id_bt){
		$data['page'] = "admin/bukutamu/bukutamu/edit/$id_bt";
  		$data['bukutamu'] = $this->bukutamu_m->select_by_id($id_bt)->row();
		$this->load->view('admin/bukutamu/edit_bukutamu', $data);
    }
    
    public function proses_edit_bukutamu(){
		$data['stats_bt'] = $this->input->post('stats');
		$id_bt=$this->input->post('id_bt');
		$this->bukutamu_m->update_bukutamu($id_bt, $data);
		redirect(site_url('admin/bukutamu'));
	}

	public function delete($id){
		$this->bukutamu_m->delete_bukutamu($id);
		//$this->session->set_flashdata('message','Post deleted');
		redirect('admin/bukutamu','refresh');
	}
}