<?php
class Identitas extends CI_Controller{
  function index(){
    $this->load->helper("url");
    $this->load->helper('form');
    $this->load->database();
    $this->load->view('v_identitas');
  }
  function input(){
    $this->form_validation->set_rules('nama', 'Nama', 'required');
      if($this->form_validation->run() != false){
          $nama = $this->input->post('nama');
          $meja = $this->session->userdata('no_meja');
          $this->load->model('M_Identitas');
          $cek_sama = $this->M_Identitas->ambil_id($nama, $meja);
          $hasil1 = $cek_sama->row();
          if ($cek_sama->num_rows()>0){
            echo $this->session->set_flashdata('msg_sama', 'Nama tidak boleh sama');
            redirect ('Identitas');
          }
      		$cek_user = $this->M_Identitas->insert($nama, $meja);
          $cek_id = $this->M_Identitas->ambil_id($nama, $meja);
          $hasil = $cek_id->row();
          $this->session->set_userdata('id_pengunjung', $hasil->id_pengunjung);
          redirect('PilihMenu');
      }else{
      		echo $this->session->set_flashdata('msg_id', validation_errors());
      		redirect('Login');
      }
}
}
 ?>
