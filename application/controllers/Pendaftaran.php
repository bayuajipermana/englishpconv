<?php
class Pendaftaran extends CI_Controller{
    function __construct(){
        parent :: __construct();
        checklogin();
        $this->load->model('Model_pendaftaran');
        $this->load->model('Model_pembayaran');
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
        if(isset($getLastIdPendaftaran)){
            $nomorterakhir = $getLastIdPendaftaran['id_pendaftaran'];
            $id_pendaftaran = buatkode($nomorterakhir, $bulan.$tahun, 4);
            $data['id_pendaftaran'] = $id_pendaftaran;
            $data['siswa'] = $this->Model_siswa->getDataSiswa()->result();
            $data['program'] = $this->Model_program->getDataProgram()->result();
            $data['diskon'] = $this->Model_diskon->getDataDiskon()->result();   
            $this->db->delete('biayalain',array('id_pendaftaran' => $id_pendaftaran));
            $this->template->load('template/template','pendaftaran/input_pendaftaran',$data);
        }else{
            $id_pendaftaran = buatkode(0, $bulan.$tahun, 4);
            $data['id_pendaftaran'] = $id_pendaftaran;
            $data['siswa'] = $this->Model_siswa->getDataSiswa()->result();
            $data['program'] = $this->Model_program->getDataProgram()->result();
            $data['diskon'] = $this->Model_diskon->getDataDiskon()->result();   
            $this->db->delete('biayalain',array('id_pendaftaran' => $id_pendaftaran));
            $this->template->load('template/template','pendaftaran/input_pendaftaran',$data);
        }
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
        $ref = $this->input->post('ref');

        $price = $this->input->post('b-price');
        $diskon = $this->input->post('b-diskon');
        $dp = $this->input->post('b-dp');
        $status = 0;
        
        $this->db->select_sum('nominal');
        $this->db->where('id_pendaftaran',$id_pendaftaran);
        $biaya = $this->db->get('biayalain')->result();
        $saldo_piutang = $price - $diskon + $biaya[0]->nominal;

        $saldo_bayar = $saldo_piutang - $dp;
        if($saldo_bayar == 0){
            $status = 1;
        }
        
        $data = array(
            'id_pendaftaran'        => $id_pendaftaran,
            'tgl_pendaftaran'       => $tgl_pendaftaran,
            'nik'                   => $nik,
            'id_program'            => $id_program,
            'jt'                    => $jatuhtempo,
            'price'                 => $price,
            'diskon'                => $diskon,
            'saldo'                 => $saldo_piutang,
            'id_user'               => $id_user,
            'status'                => $status
        );
        $simpan = $this->Model_pendaftaran->dataPendaftaran($data);


        
        $data_pembayaran = array(
            'id_pendaftaran'        => $id_pendaftaran,
            'saldo'                 => $dp,
            'tgl_bayar'             => $tgl_pendaftaran,
            'created_by'            => $id_user,
            'metode_bayar'          => $ref
        );
        $simpan = $this->Model_pembayaran->dataPembayaran($data_pembayaran);
        
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

    public function cekPendaftaran(){
        $nik = $this->input->get('nik');
        $id_program = $this->input->get('id_program');

        $nama_siswa = $this->db->get_where('siswa',array('nik' => $nik))->result();
        $data['nama_siswa'] = $nama_siswa[0]->nama;  
        
        $nama_program = $this->db->get_where('program',array('id_program' => $id_program))->result();
        $data['nama_program'] = $nama_program[0]->nama_program;

        $this->db->where('nik',$nik);
        $this->db->where('id_program',$id_program);
        $cek = $this->db->count_all_results('pendaftaran');

        if ($cek > 0) {
            $data['status'] = 0;
        }else{
            $data['status'] = 1;
        }

        echo json_encode($data);

    }

    function toggleBiayaLain(){
        $id_pendaftaran = $this->input->post('id_pendaftaran');
        $nominal = $this->input->post('nominal');
        $keterangan = $this->input->post('keterangan');
        $flag = $this->input->post('flag');
        if ($flag == 1) {
            $data = array(
                'id_pendaftaran'        => $id_pendaftaran,
                'nominal'               => $nominal,
                'keterangan'            => $keterangan,
            );
            $execute = $this->db->insert('biayalain',$data);
        }else{
            $execute = $this->db->delete('biayalain', array('id_pendaftaran' => $id_pendaftaran, 'keterangan' => $keterangan, 'nominal' => $nominal)); 
        }
    }
}
?>