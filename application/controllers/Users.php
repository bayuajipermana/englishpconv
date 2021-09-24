<?php
class Users extends CI_Controller{
    //constructor
    function __construct(){
        parent :: __construct();
        $this->load->model('Model_users');
    }
    //index page users
    function index(){
        $data['users'] = $this->Model_users->getDataUsers()->result();
        $this->template->load('template/template','users/view_users',$data);
    }
    //load view users
    function inputusers(){
        $this->load->view('users/input_users');
    }
    //proses insert db table users
    function simpanusers(){
       
    //get id_user last recorded
    $id = $this->Model_users->getLast();
    $x = substr($id['id_user'],-2); 
    $id_user = "USR0".$x+1;
    $nama    = $this->input->post('nama');
    $no_hp   = $this->input->post('no_hp');
    $username= $this->input->post('username');
    $password= $this->input->post('password');
    $level   = $this->input->post('level');
    $hash    = password_hash($password, PASSWORD_DEFAULT);

    $data = array(
        'id_user'   => $id_user,
        'nama'      => $nama,
        'no_hp'     => $no_hp,
        'username'  => $username,
        'password'  => $password,
        'level'     => $level
    );

    $simpan = $this->Model_users->insertUsers($data);

    if($simpan == 1){
        $this->session->set_flashdata('msg','<div class="alert alert-success alert-dismissible" role="alert">
        Data berhasil disimpan!
        <a href="#" class="btn-close" data-dismiss="alert" aria-label="close"></a>
        </div>');
        redirect('users');
    }else{
        $this->session->set_flashdata('msg','<div class="alert alert-danger alert-dismissible" role="alert">
        Data gagal disimpan!
        <a href="#" class="btn-close" data-dismiss="alert" aria-label="close"></a>
        </div>');
        redirect('users');
    }
    }
    //load modal edit users
    function editusers(){
        $id_user = $this->uri->segment(3);
        $data['users'] = $this->Model_users->getUsers($id_user)->row_array();
        $this->load->view('users/edit_users',$data);
    }
    //proses update data users
    function updateusers(){
        $id_user    = $this->input->post('id_user');
        $nama       = $this->input->post('nama');
        $no_hp      = $this->input->post('no_hp');
        $username   = $this->input->post('username');
        $password   = $this->input->post('password');
        $level      = $this->input->post('level');

        $data = array(
            'nama'          => $nama,
            'no_hp'         => $no_hp,
            'username'      => $username,
            'password'      => $password,
            'level'         => $level,
        );

        $simpan = $this->Model_users->updateUsers($data, $id_user);

        if($simpan == 1){
            $this->session->set_flashdata('msg','<div class="alert alert-success alert-dismissible" role="alert">
            Data berhasil diperbaharui!
            <a href="#" class="btn-close" data-dismiss="alert" aria-label="close"></a>
          </div>');
            redirect('users');
        }else{
            $this->session->set_flashdata('msg','<div class="alert alert-danger alert-dismissible" role="alert">
            Data gagal diperbaharui!
            <a href="#" class="btn-close" data-dismiss="alert" aria-label="close"></a>
          </div>');
            redirect('users');
        }
    }
}