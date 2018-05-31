<?php
class M_konfirmasi extends CI_Model {
	function jumlah($meja){
    $query = $this-> db ->query ("select * from pengunjung where nomor_meja = $meja");
    return $query;
  }
  function insert($jumlah, $meja){
    $query = $this-> db ->query ("update meja set jumlah_pengunjung = $jumlah where nomor_meja = $meja ");
    return $query;
  }
  function insert_pembayaran($meja){
    $query = $this-> db->query("select no_pesanan from memesan_makanan where id_pengunjung IN (select id_pengunjung from pengunjung where nomor_meja=$meja)");
    return $query;
  }
  function insert_pesanan($data){
    $query = $this-> db->insert('pembayaran', $data);
  }
}
?>
