<?php
class Pendaftaran extends CI_Controller{
    function __construct(){
        parent :: __construct();
        $this->load->model('Model_pendaftaran');
        $this->load->model('Model_siswa');  
        $this->load->model('Model_program');
        $this->load->model('Model_diskon');

    }
    //index page pendaftaran
    function index(){
        $data['pendaftaran'] = $this->Model_pendaftaran->getDataPendaftaran()->result();
        $this->template->load('template/template','pendaftaran/view_pendaftaran',$data);
    }


    function inputpendaftaran(){
        $bulan = date('m');
        $tahun = date('Y');
        $getLastIdPendaftaran = $this->Model_pendaftaran->getLastIdPendaftaran($bulan,$tahun)->row_array();
        $nomorterakhir = $getLastIdPendaftaran['id_pendaftaran'];
        $id_pendaftaran = buatkode($nomorterakhir, $bulan.$tahun, 4);
        $data['id_pendaftaran'] = $id_pendaftaran;
        $data['siswa'] = $this->Model_siswa->getDataSiswa()->result();
        $data['program'] = $this->Model_program->getDataProgram()->result();
        $data['diskon'] = $this->Model_diskon->getDataDiskon()->result();
        $this->template->load('template/template','pendaftaran/input_pendaftaran',$data);
    }

    function getJatuhtempo(){
        $tgl_pendaftaran  = $this->input->post('tgl_pendaftaran');
        $jatuhtempo       = date('Y-m-d', strtotime("+3 month", strtotime(date($tgl_pendaftaran))));
        echo $jatuhtempo;
    }

    function insertpendaftaran(){
        $id_pendaftaran = $this->input->post('id_pendaftaran');
        $tgl_pendaftaran = $this->input->post('tgl_pendaftaran');
        $nik = $this->input->post('nik');
        $id_program = $this->input->post('id_program');
        $jatuhtempo = $this->input->post('jatuhtempo');
        $saldo = $this->input->post('total-value');
        $id_user = $this->input->post('id_user');

        $data = array(
            'id_pendaftaran'        => $id_pendaftaran,
            'tgl_pendaftaran'       => $tgl_pendaftaran,
            'nik'                   => $nik,
            'id_program'            => $id_program,
            'jt'                    => $jatuhtempo,
            'saldo'                 => $saldo,
            'id_user'               => $id_user
        );

        $simpan = $this->Model_pendaftaran->dataPendaftaran($data);
        
        if($simpan == 1){
            $this->session->set_flashdata('msg','<div class="alert alert-success alert-dismissible" role="alert">
            Data berhasil disimpan!
            <a href="#" class="btn-close" data-dismiss="alert" aria-label="close"></a>
          </div>');
            redirect('pendaftaran/inputpendaftaran');
        }else{
            $this->session->set_flashdata('msg','<div class="alert alert-danger alert-dismissible" role="alert">
            Data gagal disimpan!
            <a href="#" class="btn-close" data-dismiss="alert" aria-label="close"></a>
          </div>');
            redirect('pendaftaran/inputpendaftaran');
        }
    }
}
?>