<?php
class Pembayaran extends CI_Controller {
  function index(){

    $this->load->helper("url");
    $this->load->helper('form');

    $this->load->database();
    $this->load->model('M_pembayaran');
    $data['bayar'] = $this->M_pembayaran->data_menu($this->session->userdata('meja_bayar'));
    $this->load->view('v_pembayaran', $data);

  }
  function bayar(){
    if ($this->input->post('metode') == 'meja'){
          $this->load->model('M_pembayaran');
          $total_harga = $this->M_pembayaran->total_harga($this->session->userdata('meja_bayar'));
          $uang = $this->input->post('uang');
          $kembalian = $uang - $total_harga;
          $data = array( 'bayar' => $uang,
                        'kembalian' => $kembalian,
                        'status' => 'terbayar',
                        'metode_bayar' => 'meja'
          );

          $no_meja = $this->session->userdata('meja_bayar');
          $query =  $this-> db ->query ("update pembayaran set bayar = '$uang', kembalian = '$kembalian', status = 'terbayar', metode_bayar='meja' where no_pesanan IN (select no_pesanan from memesan_makanan, pengunjung where pengunjung.id_pengunjung = memesan_makanan.id_pengunjung and pengunjung.nomor_meja = $no_meja )");
          $this->M_pembayaran->update_jumlah_pengunjung($this->session->userdata('meja_bayar'));
          $this->M_pembayaran->update_status($this->session->userdata('meja_bayar'));
          $this->session->unset_userdata('no_meja', 'meja_bayar');
          redirect('Pembayaran');
    } else {
      $nama = $this->input->post('metode');
      $this->load->model('M_pembayaran');
      $total_harga = $this->M_pembayaran->total_harga_sendiri($this->session->userdata('meja_bayar'), $nama);
      $total_pengunjung = $this->M_pembayaran->ambil_jumlah_pengunjung($this->session->userdata('meja_bayar'));
      $uang = $this->input->post('uang');
      $kembalian = $uang - $total_harga;
      $data = array( 'bayar' => $uang,
                    'kembalian' => $kembalian,
                    'status' => 'terbayar',
                    'metode_bayar' => 'sendiri'
      );
      $jumlah = $this->session->userdata('jumlah_pengunjung');
      $this->session->unset_userdata('jumlah_pengunjung');
      $this->session->set_userdata('jumlah_pengunjung', ++$jumlah);
      $no_meja = $this->session->userdata('meja_bayar');
      $query =  $this-> db ->query ("update pembayaran set bayar = '$uang', kembalian = '$kembalian', status = 'terbayar', metode_bayar='sendiri' where no_pesanan IN (select no_pesanan from memesan_makanan, pengunjung where pengunjung.id_pengunjung = memesan_makanan.id_pengunjung and pengunjung.nomor_meja = $no_meja and pengunjung.nama='$nama')");
      if($jumlah == $total_pengunjung){
        $this->M_pembayaran->update_jumlah_pengunjung($this->session->userdata('meja_bayar'));
        $this->M_pembayaran->update_status($this->session->userdata('meja_bayar'));
        $this->session->unset_userdata('no_meja', 'meja_bayar', 'jumlah_pengunjung');
      }
      redirect('BayarOrang');
    }
  }
}
 ?>
