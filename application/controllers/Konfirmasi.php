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
    $no_meja = $this->session->userdata('no_meja');
    echo $pilihan;
    if($pilihan == 1){
      redirect ('Identitas');
    }
    elseif($pilihan == 2){
      $this->load->model('M_konfirmasi');
  		$jumlah = $this->M_konfirmasi->jumlah($no_meja);
      $hasil = $jumlah->num_rows();
      $this->M_konfirmasi->insert($hasil, $no_meja);
      $data['pembayaran'] = $this->M_konfirmasi->insert_pembayaran($no_meja)->result();
      $this->M_konfirmasi->insert_pesanan($data);
      $this->session->set_userdata('notif', TRUE);
      $this->session->set_userdata('no_meja'.$no_meja, TRUE);
      redirect('dashboard');
    }
    else {
      $this->session->set_userdata('notif', TRUE);
      $this->session->set_userdata('koki', TRUE);
      redirect('Koki');
    }
  }
}
 ?>
