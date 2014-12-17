<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Siswa extends MY_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('siswa_m');
    }

	public function tambahsiswa(){
		$this->data['kelas'] = $this->siswa_m->get_kelas();

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

	public function proses_siswa(){
        $data['nik_siswa'] = $this->input->post('nik');
        $data['nm_siswa'] = $this->input->post('nama');
        $data['kd_kelas'] = $this->input->post('kdkelas');
        $data['alamat_siswa'] = $this->input->post('alamat');
        $data['tgl_lahir_siswa'] = $this->input->post('tgllahir');
        $data['tmp_lahir_siswa'] = $this->input->post('tempatlahir');
        $data['hp_siswa'] = $this->input->post('hp');
        $data['agama_siswa'] = $this->input->post('agama');
        $data['jk_siswa'] = $this->input->post('jk');
        $data['email_siswa'] = $this->input->post('email');
        $data['tgl_masuk_siswa'] = $this->input->post('tglmasuk');
        $data['wali_siswa'] = $this->input->post('wali');
        $data['status_siswa'] = $this->input->post('status');

        $namafolder="assets/img/siswa/"; //folder tempat menyimpan file
		if (!empty($_FILES["foto"]["tmp_name"]))
		{
		    $jenis_gambar=$_FILES['foto']['type'];
		    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/x-png")
		    {           
		        $gambar = $namafolder . basename($_FILES['foto']['name']);       
		        if (move_uploaded_file($_FILES['foto']['tmp_name'], $gambar)) {
		            //echo "Gambar yang di upload: ".basename($_FILES['foto']['name']);
		            $data['img_siswa'] = basename($_FILES['foto']['name']);
		        } else {
		           echo "Gambar gagal dikirim";
		        }
		   } else {
		        echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";
		   }
		} else {
		    $data['img_siswa'] = "default.jpg";
		}

        $this->siswa_m->insert_siswa($data);
                
        redirect(base_url('admin/siswa/daftarsiswa'));
    }

    public function editsiswa($id){
    	$this->data['kelas'] = $this->siswa_m->get_kelas();
		$this->data['siswa'] = $this->siswa_m->select_by_id_siswa($id)->row();

		$this->data['page']  = 'admin/siswa/edit_siswa';
		$this->data['title'] = 'Daftar Siswa';

		$this->load->view('admin/index', $this->data);
	}

	public function proses_edit_siswa(){
        $data['nik_siswa'] = $this->input->post('nik');
        $data['nm_siswa'] = $this->input->post('nama');
        $data['kd_kelas'] = $this->input->post('kdkelas');
        $data['alamat_siswa'] = $this->input->post('alamat');
        $data['tgl_lahir_siswa'] = $this->input->post('tgllahir');
        $data['tmp_lahir_siswa'] = $this->input->post('tempatlahir');
        $data['hp_siswa'] = $this->input->post('hp');
        $data['agama_siswa'] = $this->input->post('agama');
        $data['jk_siswa'] = $this->input->post('jk');
        $data['email_siswa'] = $this->input->post('email');
        $data['tgl_masuk_siswa'] = $this->input->post('tglmasuk');
        $data['wali_siswa'] = $this->input->post('wali');
        $data['status_siswa'] = $this->input->post('status');

        $namafolder="assets/img/siswa/"; //folder tempat menyimpan file
		if (!empty($_FILES["foto"]["tmp_name"]))
		{
		    $jenis_gambar=$_FILES['foto']['type'];
		    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/x-png")
		    {           
		        $gambar = $namafolder . basename($_FILES['foto']['name']);       
		        if (move_uploaded_file($_FILES['foto']['tmp_name'], $gambar)) {
		            //echo "Gambar yang di upload: ".basename($_FILES['foto']['name']);
		            $data['img_siswa'] = basename($_FILES['foto']['name']);
		        } else {
		           echo "Gambar gagal dikirim";
		        }
		   } else {
		        echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";
		   }
		} else {
		    $data['img_siswa'] = $this->input->post('fotosaatini');
		}

		$id = $this->input->post('nik');
        $this->siswa_m->update_siswa($id, $data);
                
        //redirect(base_url('admin/siswa/daftarsiswa'));
    }

	public function proses_edit_kelas(){
        $data['kd_kelas'] = $this->input->post('kode');
        $data['nm_kelas'] = $this->input->post('nama');
        $id = $this->input->post('kode');
        $this->siswa_m->update_kelas($id, $data);
                
        redirect(base_url('admin/siswa/kelas'));
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

    public function editkelas($id){
		$this->data['kelas'] = $this->siswa_m->select_by_id_kelas($id)->row();

		$this->data['page']  = 'admin/siswa/edit_kelas';
		$this->data['title'] = 'Kelas';

		$this->load->view('admin/index', $this->data);
	}

}