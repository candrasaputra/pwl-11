<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    public function __construct(){
        parent::__construct();

        $this->output->enable_profiler(false);

        $this->load->model('account');

        if(!$this->account->validate_cookie()){
            $this->session->set_flashdata('error', 'Anda tidak mempunyai akses ke halaman ini');
            header('location: '.site_url().'/login');
        }else{

            $this->data['cookie'] = $this->account->get_cookie();
        }

        $this->load->model('count');
        $this->data['count_artikel']  = $this->count->count_artikel();
        $this->data['count_agenda']  = $this->count->count_agenda();
        $this->data['count_info']  = $this->count->count_info();
        $this->data['count_bukutamu']  = $this->count->count_bukutamu();
        $this->data['count_siswa']  = $this->count->count_siswa();
    }   
}
/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */