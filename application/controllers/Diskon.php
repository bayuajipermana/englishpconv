<?php
class Diskon extends CI_Controller{
     //constructor
     function __construct(){
        parent :: __construct();
        checklogin();
        $this->load->model('Model_diskon');
    }
    //index page diskon
    function index(){
        $data['diskon'] = $this->Model_diskon->getDataDiskon()->result();
        $this->template->load('template/template','diskon/view_diskon',$data);
    }
    //load view diskon
    function inputdiskon(){
        $this->load->view('diskon/input_diskon');
    }
    //proses insert db table diskon
    function simpandiskon(){
        $id_diskon = $this->input->post('id_diskon');
        $nama = $this->input->post('nama');
        $jenis = $this->input->post('jenis');
        $value = $this->input->post('value');

        $data = array(
            'id_diskon'           => $id_diskon,
            'nama'          => $nama,
            'jenis'       => $jenis,
            'value_dis' => $value
        );

        $simpan = $this->Model_diskon->insertDiskon($data);

        if($simpan == 1){
            $this->session->set_flashdata('msg','<div class="alert alert-success alert-dismissible" role="alert">
            Data berhasil disimpan!
            <a href="#" class="btn-close" data-dismiss="alert" aria-label="close"></a>
          </div>');
            redirect('diskon');
        }else{
            $this->session->set_flashdata('msg','<div class="alert alert-danger alert-dismissible" role="alert">
            Data gagal disimpan!
            <a href="#" class="btn-close" data-dismiss="alert" aria-label="close"></a>
          </div>');
            redirect('diskon');
        }
    }
    //load modal edit diskon
    function editdiskon(){
        $id_diskon = $this->uri->segment(3);
        $data['diskon'] = $this->Model_diskon->getDiskon($id_diskon)->row_array();
        $this->load->view('diskon/edit_diskon',$data);
    }
    //proses update data siswa
    function updatediskon(){
        $id_diskon = $this->input->post('id_diskon');
        $nama = $this->input->post('nama');
        $jenis = $this->input->post('jenis');
        $value = $this->input->post('value');

        $data = array(
            'nama'          => $nama,
            'jenis'       => $jenis,
            'value_dis' => $value
        );            

        $simpan = $this->Model_diskon->updateDiskon($data, $id_diskon);

        if($simpan == 1){
            $this->session->set_flashdata('msg','<div class="alert alert-success alert-dismissible" role="alert">
            Data berhasil diperbaharui!
            <a href="#" class="btn-close" data-dismiss="alert" aria-label="close"></a>
          </div>');
            redirect('diskon');
        }else{
            $this->session->set_flashdata('msg','<div class="alert alert-danger alert-dismissible" role="alert">
            Data gagal diperbaharui!
            <a href="#" class="btn-close" data-dismiss="alert" aria-label="close"></a>
          </div>');
            redirect('diskon');
        }
    }
}