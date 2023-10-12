<?php
class Latihan1 extends CI_Controller
{
    public function index()
    {
        echo "Selamat Datang.. selamat belajar Web Programming";
    }

    public function penjumlahan ($n1, $n2)
    {
        $this->load->model('model_latihan');
    
        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil']  = $this->model_latihan->jumlah($n1, $n2);

        $this->load->view('view_latihan', $data);
    }
}