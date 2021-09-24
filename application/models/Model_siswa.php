<?php
class Model_siswa extends CI_Model{
    function getDataSiswa(){
        return $this->db->get('siswa');
    }

    function getDataPendaftaran(){
        return $this->db->get('pendaftaran');
    }

    function insertSiswa($data){
        $simpan = $this->db->insert('siswa',$data);

        if($simpan){
            return 1;
        }else{
            return 0;
        }
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