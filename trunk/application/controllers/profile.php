<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// submit
            if($this->input->post('publish'))
            {
                // validasi berhasil
                if($this->kelas->validasi_edit() === TRUE)
                {
                    //update db
                    $this->kelas->edit($this->session->userdata('id_kelas_sekarang'));
                    $this->session->set_flashdata('pesan', 'Proses update data berhasil.');

                    redirect('profile');
                }
                // validasi gagal
                else
                {
                    $this->load->view('page/profile', $this->data);
                }
            }
            // tidak disubmit, form pertama kali dimuat
            else
            {
                // ambil data dari database, $form_value sebagai nilai dafault form
                $profil = $this->kelas->cari('1');
                foreach($kelas as $key => $value);
                {
                    $this->data['form_value'][$key] = $value;
                }

                // set temporary data for edit
                $this->session->set_userdata('id_kelas_sekarang', $kelas->id_kelas);
                $this->session->set_userdata('kelas_sekarang', $kelas->kelas);

                $this->load->view('template', $this->data);
            }

		//$this->load->view('page/profile');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */