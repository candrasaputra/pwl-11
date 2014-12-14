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
        

        $namafolder="assets/img/staff/"; //folder tempat menyimpan file
		if (!empty($_FILES["foto"]["tmp_name"]))
		{
		    $jenis_gambar=$_FILES['foto']['type'];
		    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/x-png")
		    {           
		        $gambar = $namafolder . basename($_FILES['foto']['name']);       
		        if (move_uploaded_file($_FILES['foto']['tmp_name'], $gambar)) {
		            //echo "Gambar yang di upload: ".basename($_FILES['foto']['name']);
		            $data['img_staff'] = basename($_FILES['foto']['name']);
		        } else {
		           echo "Gambar gagal dikirim";
		        }
		   } else {
		        echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";
		   }
		} else {
		    $data['img_staff'] = "default.jpg";
		}

        $this->staff_m->insert_staff($data);
    }

	public function daftarstaff(){
		$this->data['staff'] = $this->staff_m->get_staff();

		$this->data['page']  = 'admin/staff/daftarstaff';
		$this->data['title'] = 'Daftar Staff';

		$this->load->view('admin/index', $this->data);
	}

	public function delete_staff($id){
		$this->staff_m->delete_staff($id);
		//$this->session->set_flashdata('message','Post deleted');
		redirect('admin/staff/daftarstaff','refresh');
	}
}