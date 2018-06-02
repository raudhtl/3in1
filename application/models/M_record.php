<?php
class M_record extends CI_Model {
  function record_hari_ini(){
    $query = $this->db->query("select distinct memesan_makanan.nama_menu, pembayaran.waktu, no_transaksi, total_harga, bayar, pengunjung.nama, pengunjung.nomor_meja, pembayaran.waktu from pembayaran, pengunjung, memesan_makanan where DATE(pembayaran.waktu) = curdate() and pembayaran.no_pesanan = memesan_makanan.no_pesanan and memesan_makanan.id_pengunjung = pengunjung.id_pengunjung");
    return $query->result();
  }
  function cari_record($waktu){
    $tgl=date_create("$waktu");
    $tanggal = date_format($tgl, "Y-m-d");
    $query = $this->db->query("select distinct  no_transaksi, total_harga, bayar, pembayaran.waktu, pengunjung.nama, pengunjung.nomor_meja, pembayaran.waktu, memesan_makanan.nama_menu from pembayaran, pengunjung, memesan_makanan where DATE(pembayaran.waktu) = '$tanggal' and pembayaran.no_pesanan = memesan_makanan.no_pesanan and memesan_makanan.id_pengunjung = pengunjung.id_pengunjung");
    return $query->result();
  }
  function cari_record1($waktu, $no_meja){
    $tgl=date_create("$waktu");
    $tanggal = date_format($tgl, "Y-m-d");
    $query = $this->db->query("select distinct  no_transaksi, total_harga, bayar, pembayaran.waktu, pengunjung.nama, pengunjung.nomor_meja, pembayaran.waktu, memesan_makanan.nama_menu from pembayaran, pengunjung, memesan_makanan where DATE(pembayaran.waktu) = '$tanggal' and pengunjung.nomor_meja = '$no_meja' and pembayaran.no_pesanan = memesan_makanan.no_pesanan and memesan_makanan.id_pengunjung = pengunjung.id_pengunjung");
    return $query->result();
  }
  function cari_record2($waktu, $no_meja, $nama){
    $tgl=date_create("$waktu");
    $tanggal = date_format($tgl, "Y-m-d");
    $query = $this->db->query("select distinct no_transaksi, total_harga, bayar,pembayaran.waktu, pengunjung.nama, pengunjung.nomor_meja, pembayaran.waktu, memesan_makanan.nama_menu from pembayaran, pengunjung, memesan_makanan where DATE(pembayaran.waktu) = '$tanggal' and pengunjung.nomor_meja = '$no_meja' and pengunjung.nama= '$nama' and pembayaran.no_pesanan = memesan_makanan.no_pesanan and memesan_makanan.id_pengunjung = pengunjung.id_pengunjung");
    return $query->result();
  }
}

?>
