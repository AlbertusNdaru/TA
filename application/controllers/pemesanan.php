<?php
class pemesanan extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_pemesanan');
    }

    function index()
    {
        $data['record'] = $this->model_pemesanan->tampilpemesanan();
        $this->template->load('template','pemesanan/pesan_bayar',$data);
    }

    function updatestatus()
    {
        $id=  $this->uri->segment(3);
        $this->model_pemesanan->updatestatuspemesanan($id);
        redirect('pemesanan');
    }


}