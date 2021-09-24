<?php
class Model_users extends CI_Model{
    function getDataUsers(){
        return $this->db->get('users');
    }

    function insertUsers($data){
        $simpan = $this->db->insert('users',$data);

        if($simpan){
            return 1;
        }else{
            return 0;
        }
    }

    function getUsers($id_user){
        return $this->db->get_where('users', array('id_user' => $id_user));
    }
    
    function updateUsers($data, $id_user){
        $simpan = $this->db->update('users',$data,array('id_user' => $id_user));
        if($simpan){
            return 1;
        }else{
            return 0;
        }
    }

    function getLast(){
        $get = $this->db->select('id_user')->limit(1)->order_by('id_user','DESC')->get('users')->row_array();
        return $get;
    }

}