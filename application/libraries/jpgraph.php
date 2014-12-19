<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jpgraph
{
    public function barchart()
    {
        include ("jpgraph/src/jpgraph.php");           
        include ("jpgraph/src/jpgraph_pie.php");
        include ("jpgraph/src/jpgraph_pie3d.php");

  }
}
?>