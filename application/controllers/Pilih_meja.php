<?php
class Pilih_meja extends CI_Controller{
  function index(){

    $this->load->database();
		$this->load->helper("url");
		$this->load->helper('form');
    $this->load->model('M_pilihmeja');
    $data['barang']= $this->M_pilihmeja->lihatStatus();
    if($this->session->userdata('masuk') == TRUE && $this->session->userdata('ses_level') == 1){
      $this->load->view('v_kasir_pilih_Meja', $data);
    }
    else if($this->session->userdata('masuk') == TRUE && $this->session->userdata('ses_level') == 2){
      $this->load->view('v_koki_pilih_Meja', $data);
    }
		else{
      $this->load->view('v_pengunjung_pilih_Meja', $data);
    }
  }

  function pilih (){
    $pilihan = $this->input->post('pilihan');
    $this->load->model('M_pilihmeja');
		$this->M_pilihmeja->setStatus($pilihan);
    $this->session->set_userdata('no_meja','$pilihan');
  }


}
?>
