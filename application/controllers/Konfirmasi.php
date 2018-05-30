<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notifikasi extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
    $this->load->model('M_pilihmeja');
    $data['barang']= $this->M_pilihmeja->lihatStatus();
		$this->load->view('v_notif',$data);

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
