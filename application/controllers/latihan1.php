<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class latihan1 extends CI_Controller 
{

	public function index()
	{
        echo "<h1>Selamat Datang</h1>";
        echo "<p>Nama Saya Rinaldi<p>
            <p>Selamat Belajar Web Programming</p>
              ";
        //$this->load->view('view-Latihan1');
	}
  
  public function penjumlahan($n1, $n2)
  {
      $this->load->model('Model_latihan1');
      
      $data['nilai1'] = $n1;
      $data['nilai2'] = $n2;
      $data['hasil'] = $this->Model_latihan1->jumlah($n1, $n2);
     
      $this->load->view('view-latihan1', $data);

    }
}
