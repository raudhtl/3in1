
<?php
class BayarOrang extends CI_Controller {
  function index(){

    $this->load->helper("url");
    $this->load->helper('form');

    $this->load->database();
    $this->load->model('M_pembayaran');
    $meja = $this->session->userdata('meja_bayar');
    $nama = $this-> db ->query ("select * from pengunjung where nomor_meja=$meja and status=''");
    $orang['nama']=$nama->result_array();
    $orang['base'] = $this->M_pembayaran->data_orang($this->session->userdata('meja_bayar'));

    $this->load->view('v_bayar_orang', $orang);

  }
}
 ?>
