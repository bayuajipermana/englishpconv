<?php
class Siswa extends CI_Controller{
    //constructor
    function __construct(){
        parent :: __construct();
        checklogin();
        $this->load->model('Model_siswa');
    }
    //index page siswa
    function index(){
        $data['siswa'] = $this->Model_siswa->getDataSiswa()->result();
        $this->template->load('template/template','siswa/view_siswa',$data);
    }
    //load view siswa
    function inputsiswa(){
        $this->load->view('siswa/input_siswa');
    }
    //proses insert db table siswa
    function simpansiswa(){
        $nik = $this->input->post('nik');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $no_hp = $this->input->post('no_hp');
        $asal = $this->input->post('asal');
        $kelas = $this->input->post('kelas');
        
        $hari = $this->input->post('hari');
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');
        $tgl = $tahun."-".$bulan."-".$hari;

        $wali = $this->input->post('nama_wali');
        $hp_wali = $this->input->post('hp_wali');

        $data = array(
            'nik'           => $nik,
            'nama'          => $nama,
            'alamat'        => $alamat,
            'no_hp'         => $no_hp,
            'asal_sekolah'  => $asal,
            'kelas'         => $kelas,
            'tgl_lahir'     => $tgl,
            'nama_wali'     => $wali,
            'hp_wali'       => $hp_wali
        );

        $simpan = $this->Model_siswa->insertSiswa($data);

        if($simpan == 1){
            $this->session->set_flashdata('msg','<div class="alert alert-success alert-dismissible" role="alert">
            Data berhasil disimpan!
            <a href="#" class="btn-close" data-dismiss="alert" aria-label="close"></a>
          </div>');
            redirect('siswa');
        }else{
            $this->session->set_flashdata('msg','<div class="alert alert-danger alert-dismissible" role="alert">
            Data gagal disimpan!
            <a href="#" class="btn-close" data-dismiss="alert" aria-label="close"></a>
          </div>');
            redirect('siswa');
        }
    }
    //load modal edit siswa
    function editsiswa(){
        $nik = $this->uri->segment(3);
        $data['siswa'] = $this->Model_siswa->getSiswa($nik)->row_array();
        $this->load->view('siswa/edit_siswa',$data);
    }
    //proses update data siswa
    function updatesiswa(){
        $nik = $this->input->post('nik');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $no_hp = $this->input->post('no_hp');
        $asal = $this->input->post('asal');
        $kelas = $this->input->post('kelas');
        
        $hari = $this->input->post('hari');
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');
        $tgl = $tahun."-".$bulan."-".$hari;

        $wali = $this->input->post('nama_wali');
        $hp_wali = $this->input->post('hp_wali');

        $data = array(
            'nama'          => $nama,
            'alamat'        => $alamat,
            'no_hp'         => $no_hp,
            'asal_sekolah'  => $asal,
            'kelas'         => $kelas,
            'tgl_lahir'     => $tgl,
            'nama_wali'     => $wali,
            'hp_wali'       => $hp_wali
        );

        $simpan = $this->Model_siswa->updateSiswa($data, $nik);

        if($simpan == 1){
            $this->session->set_flashdata('msg','<div class="alert alert-success alert-dismissible" role="alert">
            Data berhasil diperbaharui!
            <a href="#" class="btn-close" data-dismiss="alert" aria-label="close"></a>
          </div>');
            redirect('siswa');
        }else{
            $this->session->set_flashdata('msg','<div class="alert alert-danger alert-dismissible" role="alert">
            Data gagal diperbaharui!
            <a href="#" class="btn-close" data-dismiss="alert" aria-label="close"></a>
          </div>');
            redirect('siswa');
        }
    }
    //load modal detail siswa
    function detailsiswa(){
        $nik = $this->uri->segment(3);
        $data['siswa'] = $this->Model_siswa->getSiswa($nik)->row_array();
        $this->load->view('siswa/detail_siswa',$data);
    }   
}