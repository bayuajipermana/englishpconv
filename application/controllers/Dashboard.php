<?php
class Dashboard extends CI_Controller{
    function __construct(){
        parent::__construct();
        checklogin();
    }

    function index(){
        $today = date('Y-m-d');
        $month = date('Y-m');

        $data['jml_siswa'] = $this->db->count_all('siswa');

        $this->db->select_sum('saldo');
        $this->db->where('tgl_bayar',$today);
        $data['total_pembayaran_harian'] = $this->db->get('pembayaran')->result(); 

        $this->db->select_sum('saldo');
        $this->db->where("date_format(tgl_bayar,'%Y-%m')",$month);
        $data['total_pembayaran_bulanan'] = $this->db->get('pembayaran')->result();

        $this->db->where('status',1);
        $data['jml_siswa_lunas'] = $this->db->count_all_results('pendaftaran');

        $this->db->select('SUM(saldo) AS pemasukan, MONTH(tgl_bayar) AS bulan');
        $this->db->group_by("MONTH(tgl_bayar)");
        $data['saldo_pembayaran_bulanan'] = $this->db->get('pembayaran')->result();

        $this->template->load('template/template','dashboard/dashboard',$data);
    }
}