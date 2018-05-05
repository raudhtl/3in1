<?php
class dashboard extends CI_Controller {
  function index(){

    $this->load->helper("url");
    $this->load->helper('form');

    $this->load->database();
    $this->load->view('home');

  }
}
 ?>
