<?php
class Dashboard extends CI_Controller{
    function __construct(){
        parent::__construct();
        checklogin();
        $this->load->model('Model_siswa');
    }

    function index(){
        $gets = $this->Model_siswa->countSiswa();
        $data['siswa'] = $gets;
        $this->template->load('template/template','dashboard/dashboard',$data);
    }

}