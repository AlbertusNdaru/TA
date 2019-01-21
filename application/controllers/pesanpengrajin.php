<?php
class pesanpengrajin extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_pesanpengrajin');
        
    }
    
    function index(){
            $data['record']=$this->model_pesanpengrajin->tampilkan_data();
            $this->template->load('template','pesanpengrajin/lihat_data',$data);
    }
    
    function post()
    {
        if(isset($_POST['submit'])){
            // proses jasakirim
            $this->model_pesanpengrajin->post();
            redirect('jasakirim');
        }
        else{
            //$this->load->view('jasakirim/form_input');
            $this->template->load('template','jasakirim/form_input');
        }
    }
    
    function edit()
    {
        if(isset($_POST['submit'])){
            // proses jasakirim
            $this->model_pesanpengrajin->edit();
            redirect('jasakirim');
        }
        else{
            $id=  $this->uri->segment(3);
            $data['record']=  $this->model_pesanpengrajin->get_one($id)->row_array();
            $this->template->load('template','jasakirim/form_edit',$data);
        }
    }
    
    
    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->model_pesanpengrajin->delete($id);
        redirect('jasakirim');
    }
}