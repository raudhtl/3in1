<?php
class Koki extends CI_Controller {
  function index(){

    $this->load->helper("url");
    $this->load->helper('form');

    $this->load->database();
    $this->load->model('M_pembayaran');
    $this->load->model('M_pembayaran');
    $data['bayar'] = $this->M_pembayaran->data_menu($this->session->userdata('meja_bayar'));
    $no_pesanan = [];
    foreach($data['bayar'] as $b){
      array_push($no_pesanan, $b->no_pesanan);
    }
    $data['no_pesanan'] = $no_pesanan;
    $this->load->view('v_koki', $data);
  }

  function countDown(){
    $this->load->helper("url");
    $this->load->helper('form');
    $this->load->model('M_pembayaran');

    $pesanan = $this->input->post('pesanan');
    $pesanan = $this->M_pembayaran->waktuPesanan($pesanan);

    echo json_encode($pesanan);
  }
}
?>
