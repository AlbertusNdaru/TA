<?php
class laporan extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_laporan');
    }

    function index()
    {
        $data['record'] = $this->model_laporan->tampillaporanpenjualan();
        $this->template->load('template','laporan/laporan_penjualan',$data);
    }

    function updatestatus()
    {
        $id=  $this->uri->segment(3);
        $this->model_laporan->updatestatuspemesanan($id);
        redirect('pemesanan');
    }
    
    function tampil_data_pemesanan()
    {
        $data['record']=$this->model_laporan->tampilkan_data_pemesanan();
        $this->template->load('template','pemesanan/lihat_data',$data);
    } 




}