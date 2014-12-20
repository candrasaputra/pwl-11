<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends MY_Controller{
    function __construct()
	{
		parent::__construct();
		$this->load->model('dashboard_m');
		$this->load->model('account');
    }

	public function index(){
		$this->data['chat'] = $this->dashboard_m->get_chat();

		$this->data['page']  = 'admin/dashboard/dashboard';
		$this->data['title'] = 'Dashboard';
		$this->load->view('admin/index', $this->data);

	}

	public function proses_chat(){
		$data['pesan_chat'] = $this->input->post('isi');
        $data['id_login'] = $this->input->post('id');

		$this->dashboard_m->insert_chat($data);
	}

	public function profile(){
		$id = $this->data['cookie']['c_id'];
		
		$this->data['profile'] = $this->dashboard_m->get_profileadmin($id)->row();

		$this->data['page']  = 'admin/dashboard/profileadmin';
		$this->data['title'] = 'Dashboard';

		$this->load->view('admin/index', $this->data);
	}

	public function tes(){
		echo $cookie['c_fullname'];
	}

	public function proses_edit_profile(){
        $data['nama'] = $this->input->post('nama');
        $data['username'] = $this->input->post('username');
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
		    $data['img'] = $this->input->post('fotosaatini');
		}


        $id = $this->data['cookie']['c_id'];
        $this->account->update_akun($id, $data);
                
        redirect(base_url('admin/dashboard/profile'));
    }

    public function proses_edit_pass(){
    	$data['password'] = md5($this->input->post('pass'));

        $id = $this->data['cookie']['c_id'];
        $this->account->update_akun($id, $data);
                
        redirect(base_url('admin/dashboard/profile'));
    }
}