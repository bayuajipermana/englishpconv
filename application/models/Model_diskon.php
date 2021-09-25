<?php
class Model_diskon extends CI_Model{
    function getDataDiskon(){
        return $this->db->get('diskon');
    }

    function getLastId(){
        $this->db->select('id_diskon');
        $this->db->from('diskon');
        $this->db->order_by('id_diskon','desc');
        $this->db->limit(1);
        return $this->db->get();
    }

    function insertDiskon($data){
        $simpan = $this->db->insert('diskon',$data);

        if($simpan){
            return 1;
        }else{
            return 0;
        }
    }

    function getDiskon($id_diskon){
        return $this->db->get_where('diskon', array('id_diskon' => $id_diskon));
    }
    
    function updateDiskon($data, $id_diskon){
        $simpan = $this->db->update('diskon',$data,array('id_diskon' => $id_diskon));
        if($simpan){
            return 1;
        }else{
            return 0;
        }
    }
}