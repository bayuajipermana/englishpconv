<?php
class Program extends CI_Controller{
    //constructor
    function __construct(){
        parent :: __construct();
        checklogin();
        $this->load->model('Model_program');
    }
    //index page PROGRAM
    function index(){
        $data['program'] = $this->Model_program->getDataProgram()->result();
        $this->template->load('template/template','program/view_program',$data);
    }
    //load view program
    function inputprogram(){
        $this->load->view('program/input_program');
    }
    //proses insert db table program
    function simpanprogram(){
       
    $id_program     = $this->input->post('id_program');
    $nama_program   = $this->input->post('nama_program');
    $harga          = $this->input->post('harga');
    
    $data = array(
        'id_program'   => $id_program,
        'nama_program' => $nama_program,
        'harga'        => $harga
    );

    $simpan = $this->Model_program->insertprogram($data);

    if($simpan == 1){
        $this->session->set_flashdata('msg','<div class="alert alert-success alert-dismissible" role="alert">
        Data berhasil disimpan!
        <a href="#" class="btn-close" data-dismiss="alert" aria-label="close"></a>
        </div>');
        redirect('program');
    }else{
        $this->session->set_flashdata('msg','<div class="alert alert-danger alert-dismissible" role="alert">
        Data gagal disimpan!
        <a href="#" class="btn-close" data-dismiss="alert" aria-label="close"></a>
        </div>');
        redirect('program');
    }
    }
    //load modal edit program
    function editprogram(){
        $id_program = $this->uri->segment(3);
        $data['program'] = $this->Model_program->getProgram($id_program)->row_array();
        $this->load->view('program/edit_program',$data);
    }
    //proses update data program
    function updateprogram(){
        $id_program     = $this->input->post('id_program');
        $nama_program   = $this->input->post('nama_program');
        $harga          = $this->input->post('harga');
        
        $data = array(
            'nama_program' => $nama_program,
            'harga'        => $harga
        );

        $simpan = $this->Model_program->updateProgram($data, $id_program);

        if($simpan == 1){
            $this->session->set_flashdata('msg','<div class="alert alert-success alert-dismissible" role="alert">
            Data berhasil disimpan!
            <a href="#" class="btn-close" data-dismiss="alert" aria-label="close"></a>
            </div>');
            redirect('program');
        }else{
            $this->session->set_flashdata('msg','<div class="alert alert-danger alert-dismissible" role="alert">
            Data gagal disimpan!
            <a href="#" class="btn-close" data-dismiss="alert" aria-label="close"></a>
            </div>');
            redirect('program');
        }
    }
}