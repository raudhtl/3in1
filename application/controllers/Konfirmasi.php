<?php
class Konfirmasi extends CI_Controller {
  function index(){

    $this->load->helper("url");
    $this->load->helper('form');

    $this->load->database();
    $this->load->view('v_konfirmasi');

  }
  function pilih(){
    $pilihan = $this->input->post('pilih');
    echo $pilihan;
    if($pilihan == 1){
      redirect ('Identitas');
    }
    else{
      $this->load->model('M_konfirmasi');
  		$jumlah = $this->M_konfirmasi->jumlah($this->session->userdata('no_meja'));
      $hasil = $jumlah->num_rows();
      $this->M_konfirmasi->insert($hasil, $this->session->userdata('no_meja'));
      $pembayaran = $this->M_konfirmasi->insert_pembayaran($this->session->userdata('no_meja'));
      $hasil2 = $pembayaran->row_array();
      $this->M_konfirmasi->insert_pesanan($hasil2);

      $this->session->sess_destroy();
      redirect('dashboard');
    }
  }
}
 ?>
