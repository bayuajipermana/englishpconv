<?php 
class Errors extends CI_Controller 
{
 public function __construct() 
 {
    parent::__construct(); 
 } 

 public function index() { 
    $this->output->set_status_header('404'); 
    $this->load->view('errors/html/error_404');//loading in custom error view
 } 
} 
