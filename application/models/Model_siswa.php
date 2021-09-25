<?php
class Model_siswa extends CI_Model{
    function getDataSiswa(){
        return $this->db->get('siswa');
    }

    function getDataPendaftaran(){
        return $this->db->get('pendaftaran');
    }

    function countSiswa(){
        return $this->db->query('SELECT COUNT(nik) AS c FROM siswa')->result();
    }

    function insertSiswa($data){
        $simpan = $this->db->insert('siswa',$data);

        if($simpan){
            return 1;
        }else{
            return 0;
        }
    }

    function getLastId(){
        $this->db->select('nik');
        $this->db->from('siswa');
        $this->db->order_by('nik','desc');
        $this->db->limit(1);
        return $this->db->get();
    }

    function getSiswa($nik){
        return $this->db->get_where('siswa', array('nik' => $nik));
    }
    
    function updateSiswa($data, $nik){
        $simpan = $this->db->update('siswa',$data,array('nik' => $nik));
        if($simpan){
            return 1;
        }else{
            return 0;
        }
    }
}