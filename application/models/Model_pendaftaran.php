<?php
class Model_pendaftaran extends CI_Model{
    function getLastIdPendaftaran($bulan,$tahun){
        
        $this->db->select('id_pendaftaran');
        $this->db->from('pendaftaran');
        $this->db->where('MONTH(tgl_pendaftaran)',$bulan);
        $this->db->where('YEAR(tgl_pendaftaran)',$tahun);
        $this->db->order_by('id_pendaftaran','desc');
        $this->db->limit(1);
        return $this->db->get();
    }

    function dataPendaftaran($data){
        $simpan = $this->db->insert('pendaftaran',$data);

        if($simpan){
            return 1;
        }else{
            return 0;
        }
    }

    function getDataPendaftaran(){
        $this->db->select('pendaftaran.id_pendaftaran, pendaftaran.tgl_pendaftaran, pendaftaran.nik, siswa.nama, users.id_user , program.nama_program, pendaftaran.saldo, pendaftaran.jt, pendaftaran.status, (SELECT sum(saldo) from pembayaran where id_pendaftaran = pendaftaran.id_pendaftaran) total_bayar ');
        $this->db->from('pendaftaran');
        $this->db->join('program', 'pendaftaran.id_program = program.id_program');
        $this->db->join('siswa','pendaftaran.nik = siswa.nik');
        $this->db->join('users','pendaftaran.id_user = users.id_user');
        return $this->db->get();
    }

    function getDataPendaftaranById($id){
        $this->db->select('pendaftaran.id_pendaftaran, pendaftaran.tgl_pendaftaran, pendaftaran.nik, siswa.nama, users.id_user , program.nama_program, program.id_program, pendaftaran.saldo, pendaftaran.jt, pendaftaran.price, pendaftaran.diskon ');
        $this->db->from('pendaftaran');
        $this->db->join('program', 'pendaftaran.id_program = program.id_program');
        $this->db->join('siswa','pendaftaran.nik = siswa.nik');
        $this->db->join('users','pendaftaran.id_user = users.id_user');
        $this->db->where('pendaftaran.id_pendaftaran',$id);
        return $this->db->get();    
    }

    function setLunas($id){
        $this->db->set('status', '1');
        $this->db->where('id_pendaftaran', $id);
        $this->db->update('pendaftaran');
    }
}