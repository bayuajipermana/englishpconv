<?php
class Pembayaran extends CI_Controller{
    function __construct(){
        parent :: __construct();
        $this->load->model('Model_pendaftaran');
        $this->load->model('Model_pembayaran');
        $this->load->model('Model_siswa');  
        $this->load->model('Model_program');
        $this->load->model('Model_diskon');

    }
    //index page pendaftaran
    function index(){
        $data['pembayaran'] = $this->Model_pembayaran->getDataPembayaran()->result();
        $this->template->load('template/template','pembayaran/view_pembayaran',$data);
    }


    function inputpembayaran($id_pendaftaran){
        $bulan = date('m');
        $tahun = date('Y');
        
        $data['pendaftaran'] = $this->Model_pendaftaran->getDataPendaftaranById($id_pendaftaran)->result();
        $data['totalbayar'] = $this->Model_pembayaran->getTotalBayar($id_pendaftaran)->result();
        $data['siswa'] = $this->Model_siswa->getDataSiswa()->result();
        $data['program'] = $this->Model_program->getDataProgram()->result();
        $data['diskon'] = $this->Model_diskon->getDataDiskon()->result();
        $this->template->load('template/template','pembayaran/input_pembayaran',$data);
    }

    function getJatuhtempo(){
        $tgl_pendaftaran  = $this->input->post('tgl_pendaftaran');
        $jatuhtempo       = date('Y-m-d', strtotime("+3 month", strtotime(date($tgl_pendaftaran))));
        echo $jatuhtempo;
    }

    function insertpembayaran(){
        $id_pendaftaran = $this->input->post('id_pendaftaran');
        $bayar = $this->input->post('bayar');
        $tgl_bayar = date('Y-m-d');
        $id_user = $this->input->post('id_user');

        $data = array(
            'id_pendaftaran'        => $id_pendaftaran,
            'saldo'                 => $bayar,
            'tgl_bayar'             => $tgl_bayar,
            'created_by'            => $id_user,
        );

        $simpan = $this->Model_pembayaran->dataPembayaran($data);
        
        if($simpan == 1){
            $this->session->set_flashdata('msg','<div class="alert alert-success alert-dismissible" role="alert">
            Data berhasil disimpan!
            <a href="#" class="btn-close" data-dismiss="alert" aria-label="close"></a>
          </div>');
            redirect('pembayaran');
        }else{
            $this->session->set_flashdata('msg','<div class="alert alert-danger alert-dismissible" role="alert">
            Data gagal disimpan!
            <a href="#" class="btn-close" data-dismiss="alert" aria-label="close"></a>
          </div>');
            redirect('pembayaran/inputpembayaran/'.$id_pendaftaran);
        }
    }

    function editpembayaran(){
        $id_pembayaran = $this->input->get('id');
        
        
        $data['pembayaran'] = $this->Model_pembayaran->getDataPembayaranByid($id_pembayaran)->result();
        $data['pendaftaran'] = $this->Model_pendaftaran->getDataPendaftaranById($id_pendaftaran)->result();
        $data['totalbayar'] = $this->Model_pembayaran->getTotalBayar($id_pendaftaran)->result();
        $data['siswa'] = $this->Model_siswa->getDataSiswa()->result();
        $data['program'] = $this->Model_program->getDataProgram()->result();
        $data['diskon'] = $this->Model_diskon->getDataDiskon()->result();
        $this->template->load('template/template','pembayaran/input_pembayaran',$data);
    }
}
?>