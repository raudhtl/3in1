
<?php
class M_konfirmasi extends CI_Model {
	function jumlah($meja){
    $query = $this-> db ->query ("select * from pengunjung where nomor_meja = $meja and status=''");
    return $query;
  }
  function insert($jumlah, $meja){
    $query = $this-> db ->query ("update meja set jumlah_pengunjung = $jumlah where nomor_meja = $meja ");
    return $query;
  }
  function insert_pembayaran($meja){
    $query = $this-> db->query("select no_pesanan, memesan_makanan.nama_menu, jumlah, harga from memesan_makanan, menu where memesan_makanan.nama_menu = menu.nama_menu and id_pengunjung IN (select id_pengunjung from pengunjung where nomor_meja=$meja)");
    return $query;
  }
  function insert_pesanan($data){
		foreach($data['pembayaran'] as $key) {
			$harga = $key->jumlah * $key->harga;
      $dataToSave = array(
        'no_pesanan' => $key->no_pesanan,
				'total_harga' => $harga
      );
      $this->db->insert('pembayaran', $dataToSave);
   }
  }
}

?>
