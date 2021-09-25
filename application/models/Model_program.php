<?php
class Model_program extends CI_Model{
    function getDataProgram(){
        return $this->db->get('program');
    }

    function insertProgram($data){
        $simpan = $this->db->insert('program',$data);

        if($simpan){
            return 1;
        }else{
            return 0;
        }
    }

    function getLastId(){
        $this->db->select('id_program');
        $this->db->from('program');
        $this->db->order_by('id_program','desc');
        $this->db->limit(1);
        return $this->db->get();
    }

    function getProgram($id_program){
        return $this->db->get_where('program', array('id_program' => $id_program));
    }
    
    function updateProgram($data, $id_program){
        $simpan = $this->db->update('program',$data,array('id_program' => $id_program));
        if($simpan){
            return 1;
        }else{
            return 0;
        }
    }
}