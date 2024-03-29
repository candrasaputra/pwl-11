<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    public function __construct(){
        parent::__construct();

        $this->load->model('account');

        //$this->output->enable_profiler(true);

        if(!$this->account->validate_cookie()){
            $this->session->set_flashdata('error', 'Anda tidak mempunyai akses ke halaman ini');
            header('location: '.site_url().'/login');
        }else{

            $this->data['cookie'] = $this->account->get_cookie();
        }

        $this->load->model('count_m');
        $this->data['count_artikel']  = $this->count_m->count_artikel();
        $this->data['count_agenda']  = $this->count_m->count_agenda();
        $this->data['count_info']  = $this->count_m->count_info();
        $this->data['count_bukutamu']  = $this->count_m->count_bukutamu();

        $this->data['count_siswa']  = $this->count_m->count_siswa();
        $this->data['count_alumni']  = $this->count_m->count_alumni();
        $this->data['count_staff']  = $this->count_m->count_staff();
        $this->data['count_guru']  = $this->count_m->count_guru();
    }   
}
/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */