<?php
class M_pembayaran extends CI_Model {
  function data_menu($meja){
    $query = $this-> db ->query ("select distinct memesan_makanan.nama_menu, sum(jumlah) as total, harga from memesan_makanan, menu where id_pengunjung IN (select id_pengunjung from pengunjung where nomor_meja = $meja) and menu.nama_menu=memesan_makanan.nama_menu group by nama_menu");
    return $query->result();
  }
}

?>
