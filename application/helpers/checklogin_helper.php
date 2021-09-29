<?php

function checkLog(){
    $CI = & get_instance();
    $level = $CI -> session -> userdata('level');
    if(!empty($level)){
        redirect('Dashboard');
    }
}

function checklogin(){
    $CI = & get_instance();
    $level = $CI -> session -> userdata('level');
    if(empty($level)){
        redirect('auth/login');
    }
}

function checkAdmin(){
    $CI = & get_instance();
    $level = $CI -> session -> userdata('level');
    if(empty($level) or $level == 'user'){
        redirect('Dashboard');
    }
}