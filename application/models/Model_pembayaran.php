<?php
class Model_pembayaran extends CI_Model{
    function getLastIdPendaftaran($bulan,$tahun){
        
        $this->db->select('id_pendaftaran');
        $this->db->from('pendaftaran');
        $this->db->where('MONTH(tgl_pendaftaran)',$bulan);
        $this->db->where('YEAR(tgl_pendaftaran)',$tahun);
        $this->db->order_by('id_pendaftaran','desc');
        $this->db->limit(1);
        return $this->db->get();
    }

    function dataPembayaran($data){
        $simpan = $this->db->insert('pembayaran',$data);

        if($simpan){
            return 1;
        }else{
            return 0;
        }
    }

    function getDataPembayaran(){
        $this->db->select('pembayaran.id_pembayaran, pembayaran.id_pendaftaran, siswa.nama, program.nama_program, program.id_program, pembayaran.tgl_bayar, pembayaran.saldo ');
        $this->db->from('pembayaran');
        $this->db->join('pendaftaran','pendaftaran.id_pendaftaran = pembayaran.id_pendaftaran');
        $this->db->join('program', 'pendaftaran.id_program = program.id_program');
        $this->db->join('siswa','pendaftaran.nik = siswa.nik');
        $this->db->join('users','pendaftaran.id_user = users.id_user');
        return $this->db->get();
    }

    function getTotalBayar($id){
        $this->db->select_sum('saldo');
        $this->db->from('pembayaran');
        $this->db->where('id_pendaftaran',$id);
        return $this->db->get();
    }
}