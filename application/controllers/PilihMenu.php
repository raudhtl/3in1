<?php
class PilihMenu extends CI_Controller{
  function index(){
    $this->load->helper("url");
    $this->load->helper('form');

    $this->load->database();
    $this->load->model('M_pilih_menu');
    $data['barang']= $this->M_pilih_menu->ambil_menu();
    $this->load->view('v_pilih_menu', $data);
  }
  function pilih (){
    for($i=0; $i<2; $i++) {
      $data = array(
      'nama_menu' => $this->input->post("menu".$i) ,
      'jumlah' => $this->input->post("jumlah".$i),
      'id_pengunjung' => $this->session->userdata('id_pengunjung'));
      $this->db->insert('memesan_makanan', $data);
    }
    redirect('Identitas');
  }
}
 ?>
