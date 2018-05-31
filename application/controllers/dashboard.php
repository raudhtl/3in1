
<?php
class dashboard extends CI_Controller {
  function index(){

    $this->load->helper("url");
    $this->load->helper('form');

    $this->load->database();
    $this->session->unset_userdata('masuk', 'ses_level', 'ses_username', 'id_pengunjung', 'no_meja');
    $this->load->view('home');

  }
}

?>
