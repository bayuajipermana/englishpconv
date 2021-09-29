<?php
class Reports extends CI_Controller{
    function __construct(){
        parent::__construct();
        checklogin();
        checkAdmin();
        $this->load->model('Model_program');
    }

    function laporanPembayaran(){
        $data['program'] = $this->Model_program->getDataProgram()->result();
        $this->template->load('template/template','laporan/laporan_pembayaran',$data);
    }

    function getDataLapPembayaran(){
        $tglawal = $this->input->post('tglawal');
        $tglakhir = $this->input->post('tglakhir');
        $program = $this->input->post('program');

        $this->db->select('pendaftaran.id_pendaftaran, siswa.nama, program.nama_program, pendaftaran.jt, pembayaran.tgl_bayar, pendaftaran.saldo, pembayaran.saldo as jml_bayar, (SELECT ifnull(sum(saldo),0) from pembayaran where id_pendaftaran=pendaftaran.id_pendaftaran) total_bayar');
        $this->db->from('pendaftaran');
        $this->db->join('siswa','siswa.nik = pendaftaran.nik');
        $this->db->join('program','program.id_program = pendaftaran.id_program');
        $this->db->join('pembayaran','pendaftaran.id_pendaftaran = pembayaran.id_pendaftaran');
        $this->db->where('pembayaran.tgl_bayar >=',$tglawal);
        $this->db->where('pembayaran.tgl_bayar <=',$tglakhir);
        $this->db->order_by('pembayaran.tgl_bayar, pendaftaran.id_pendaftaran, siswa.nama, program.nama_program');

        if ($this->input->post('program') !== 'All') {
            $this->db->where('pendaftaran.id_program',$program);
        }
        $data = $this->db->get()->result();

        echo json_encode($data);
    }

    function getDataLapPembayaran_Excel(){
        $tglawal = $this->input->get('tglawal');
        $tglakhir = $this->input->get('tglakhir');
        $program = $this->input->get('program');

        

        $this->db->select('pendaftaran.id_pendaftaran, siswa.nama, program.nama_program, pendaftaran.jt, pembayaran.tgl_bayar, pendaftaran.saldo, pembayaran.saldo as jml_bayar, (SELECT ifnull(sum(saldo),0) from pembayaran where id_pendaftaran=pendaftaran.id_pendaftaran) total_bayar');
        $this->db->from('pendaftaran');
        $this->db->join('siswa','siswa.nik = pendaftaran.nik');
        $this->db->join('program','program.id_program = pendaftaran.id_program');
        $this->db->join('pembayaran','pendaftaran.id_pendaftaran = pembayaran.id_pendaftaran');
        $this->db->where('pembayaran.tgl_bayar >=',$tglawal);
        $this->db->where('pembayaran.tgl_bayar <=',$tglakhir);
        $this->db->order_by('pembayaran.tgl_bayar, pendaftaran.id_pendaftaran, siswa.nama, program.nama_program');

        if ($this->input->get('program') !== 'All') {
            $this->db->where('pendaftaran.id_program',$program);
        }
        $data['pendaftaran'] = $this->db->get()->result();

        $this->load->view('laporan/export_laporan_pembayaran.php',$data);
    }


}