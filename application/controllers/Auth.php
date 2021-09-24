<?php
    class Auth extends CI_Controller{

        function __construct(){
            parent:: __construct();
            $this->load->model('Model_Auth');
        }

        function login(){
            checkLog();
           $this->load->view('auth/login');
        }

        function ceklogin(){
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $login = $this->Model_Auth->getLogin($username, $password);
            $ceklogin = $login->num_rows();
            $datalogin = $login->row_array();
            $data = array(
                'id_user' => $datalogin['id_user'],
                'nama' => $datalogin['nama'],
                'username' => $datalogin['username'],
                'password' => $datalogin['password'],
                'level' => $datalogin['level'],
            );

            $this->session->set_userdata($data);
           
            if($ceklogin == 1){
                $this->session->set_flashdata('msg','
                <div class="alert alert-warning" role="alert">
                   Login Berhasil
                </div>
                ');
                redirect('dashboard');
            }else{
                $this->session->set_flashdata('msg','
                <div class="alert alert-warning" role="alert">
                   Username atau Password salah
                </div>
                ');
                redirect('auth/login');
            }
        }
        function logout(){
            session_destroy();
            redirect('auth/login');
        }
    }

