<?php
class lihatpesanan extends CI_Controller {
  function index(){

    $this->load->helper("url");
    $this->load->helper('form');

    $this->load->database();
    $this->load->model('M_pembayaran');
    $this->load->model('M_pilih_menu');
    $nomor = $this->session->userdata('no_meja');
    $nama = $this-> db ->query ("select * from pengunjung where nomor_meja=$nomor");
    $orang['nama']=$nama->result_array();
    $orang['base'] = $this->M_pembayaran->data_orang($this->session->userdata('no_meja'));
    $this->load->view('v_lihatpesanan', $orang);

  }


}
 ?>
