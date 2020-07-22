<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class Sessions extends CI_Controller  
{ 
  public function __construct() { 
    parent::__construct(); 
  } 
 
  public function index() { 
    $this->slice->view('login.php'); 
  } 
 
  function logout() {
    $this->session->sess_destroy(); 
    redirect('login/index'); 
  } 
}