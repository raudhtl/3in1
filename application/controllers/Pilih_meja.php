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
      $this->load->view('v_pengunjung_pilih_meja', $data);
    }
  }

  function pilih (){
    $this->form_validation->set_rules('password', 'Password', 'required');
    if($this->form_validation->run() != false){
      $password=$this->input->post('password');
      $pilihan = $this->input->post('pilihan');

      $this->load->model('M_pilihmeja');
  		$cek_user = $this->M_pilihmeja->cekPassword($pilihan, $password);
      $data = $cek_user->row_array();
      if (isset($data) && count ($data) >0){
          $this->M_pilihmeja->setStatus($pilihan);
          $this->session->set_userdata('no_meja',$pilihan);
  				redirect('Identitas');
  		}
      else {
  				$url=base_url();
      		echo $this->session->set_flashdata('message','Username Atau Password Salah');
  				echo $pilihan;
  		}
    }
    else{
  			echo $this->session->set_flashdata('msg', validation_errors());
  			redirect('Login');
  	}
  }
  function pilih_bayar (){
      $pilihan = $this->input->post('pilihan');
      $this->session->set_userdata('meja_bayar', $pilihan);
      redirect('Pembayaran');
  }
  function pilih_koki (){
      $pilihan = $this->input->post('pilihan');
      $this->session->set_userdata('meja_bayar', $pilihan);
      redirect('Koki');
  }
}
?>
