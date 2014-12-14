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
		$this->data['title'] = 'Daftar Akun';

		$this->load->view('admin/index', $this->data);

	}

	public function tambahakun(){
		$this->data['page']  = 'admin/akun/tambahakun';
		$this->data['title'] = 'Tambah Akun';

		$this->load->view('admin/index', $this->data);

	}

	public function proses_akun(){
		$data['username'] = $this->input->post('username');
        $data['password'] = md5('$this->input->post(pass)');
        $data['nama'] = $this->input->post('nama');
        $data['email'] = $this->input->post('email');
        $data['hp'] = $this->input->post('hp');        

        $namafolder="assets/img/admin/"; //folder tempat menyimpan file
		if (!empty($_FILES["foto"]["tmp_name"]))
		{
		    $jenis_gambar=$_FILES['foto']['type'];
		    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/x-png")
		    {           
		        $gambar = $namafolder . basename($_FILES['foto']['name']);       
		        if (move_uploaded_file($_FILES['foto']['tmp_name'], $gambar)) {
		            //echo "Gambar yang di upload: ".basename($_FILES['foto']['name']);
		            $data['img'] = basename($_FILES['foto']['name']);
		        } else {
		           echo "Gambar gagal dikirim";
		        }
		   } else {
		        echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";
		   }
		} else {
		    $data['img'] = "default.jpg";
		}

        $this->account->insert_akun($data);
	}

	public function daftarakun(){		
		$this->data['akun'] = $this->account->get_account();
		$this->data['page']  = 'admin/akun/akun';
		$this->data['title'] = 'Daftar Akun';

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