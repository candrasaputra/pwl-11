<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Bukutamu extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('bukutamu_m');
    }

    public function index(){           
        $this->data['bukutamu'] = $this->bukutamu_m->get_bukutamu_publish();
        $this->data['page']  = 'admin/bukutamu/bukutamu';
        $this->data['title'] = 'Buku Tamu';

        $this->load->view('page/bukutamu', $this->data);

    }

    public function proses_tambah_bukutamu(){
        date_default_timezone_set("Asia/Jakarta");
                
        $data['nm_bt'] = $this->input->post('nama');
        $data['isi_bt'] = $this->input->post('isi');
        $data['email_bt'] = $this->input->post('email');
        $data['web_bt'] = $this->input->post('web');
        $data['tgl_bt'] = date('y-m-d');
        $data['stats_bt'] = "draff";
        $this->bukutamu_m->insert_bukutamu($data);
                
        redirect(base_url('bukutamu'));
    }


}