<?php
class dashboard extends CI_Controller {
  function index(){

    $this->load->helper("url");
    $this->load->helper('form');

    $this->load->database();
    $this->session->sess_destroy();
    $this->load->view('home');

  }
}
 ?>
