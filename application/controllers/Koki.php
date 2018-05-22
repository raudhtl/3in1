<?php
class Koki extends CI_Controller {
  function index(){

    $this->load->helper("url");
    $this->load->helper('form');

    $this->load->database();
    $this->load->model('M_pembayaran');
    $this->load->model('M_pembayaran');
    $data['bayar'] = $this->M_pembayaran->data_menu($this->session->userdata('meja_bayar'));
    $this->load->view('v_koki', $data);

  }
}
?>
