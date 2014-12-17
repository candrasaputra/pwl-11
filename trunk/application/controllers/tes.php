<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Tes extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('bukutamu_m');
    }

    public function index(){           
        $this->data['bukutamu'] = $this->bukutamu_m->get_bukutamu_publish();
        $this->data['page']  = 'admin/bukutamu/bukutamu';
        $this->data['title'] = 'Buku Tamu';

        $this->load->view('tes', $this->data);

    }

function tampilgrafik()
    {
        $this->load->library('jpgraph');
       
       $bar_graph = $this->jpgraph->barchart();
       $datax = array(2,10,20);
        $datay = array("rendah","sedang","bagus");
       
        $graph = new PieGraph(400,270,"auto");
        $graph->SetScale('textint');
        $graph->img->SetMargin(50,30,70,100);
        $graph->SetShadow();
              
        $bplot = new PiePlot3D($datax);
        $bplot->SetCenter(0.45,0.40);
        $bplot->SetLegends($datay);
        $bplot->value->Show();
        $bplot->value->SetFont(FF_ARIAL,FS_BOLD);
               
        $graph->Add($bplot);
        $graph->Stroke();
    }

}