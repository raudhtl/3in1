

<?php
class M_pembayaran extends CI_Model {
  function data_menu($meja){
    $query = $this-> db ->query ("select distinct memesan_makanan.nama_menu, pembayaran.status, memesan_makanan.no_pesanan, sum(jumlah) as total, harga, memesan_makanan.waktu, pembayaran.status  from pembayaran, memesan_makanan, menu, pengunjung where pembayaran.no_pesanan = memesan_makanan.no_pesanan and pengunjung.id_pengunjung=memesan_makanan.id_pengunjung and pengunjung.id_pengunjung IN (select id_pengunjung from pengunjung where nomor_meja = $meja  and pengunjung.status='') and menu.nama_menu=memesan_makanan.nama_menu group by memesan_makanan.nama_menu");
    return $query->result();
  }
  function lihat_status($meja){
    $query = $this-> db ->query ("select pembayaran.status from memesan_makanan, pembayaran,pengunjung where nomor_meja=$meja and pembayaran.no_pesanan = memesan_makanan.no_pesanan and pengunjung.id_pengunjung=memesan_makanan.id_pengunjung and pengunjung.status=''");
    return $query->row()->status;
  }

  function waktuPesanan($id){
    $query = $this-> db ->query ("select waktu from memesan_makanan where no_pesanan = $id");
    return $query->result();
  }

  function data_orang($meja){
    $nama = $this-> db ->query ("select * from pengunjung where nomor_meja=$meja and status!='Nonaktif'");

    foreach($nama->result_array() as $roww){
      $i=1;

        $b = $roww['id_pengunjung'];
        $query = $this-> db ->query ("select distinct memesan_makanan.nama_menu, sum(jumlah) as total,sum(harga) as total_harga from memesan_makanan, pengunjung, menu where pengunjung.id_pengunjung = $b and memesan_makanan.nama_menu = menu.nama_menu and memesan_makanan.id_pengunjung=pengunjung.id_pengunjung group by memesan_makanan.nama_menu");

        foreach ($query->result_array() as $row){
          $a = $roww['nama'];
          $data[$a]['nama_menuu'.$i] = $row['nama_menu'];
          $data[$a]['hargaa'.$i] = $row['total_harga'];
          $data[$a]['jumlahh'.$i] =$row['total'];
          $i++;

        }
        $this->session->set_userdata('i', $i);
    }
    return $data;
  }
  function total_harga($no_meja){
    $query =  $this-> db ->query ("select sum(total_harga)  as total_harga from pembayaran, memesan_makanan, pengunjung where Pembayaran.no_pesanan=memesan_makanan.no_pesanan and pengunjung.id_pengunjung = memesan_makanan.id_pengunjung and pengunjung.nomor_meja = $no_meja and pengunjung.status=''");
    return $query->row()->total_harga;
}
function total_harga_sendiri($no_meja, $nama){
  $query =  $this-> db ->query ("select sum(total_harga)  as total_harga from pembayaran, memesan_makanan, pengunjung where Pembayaran.no_pesanan=memesan_makanan.no_pesanan and pengunjung.id_pengunjung = memesan_makanan.id_pengunjung and pengunjung.nomor_meja = $no_meja and pengunjung.nama='$nama' and pengunjung.status = ''");
  return $query->row()->total_harga;
}
function update_jumlah_pengunjung($no_meja){
  $query = $this->db->query("update meja set jumlah_pengunjung = 0 where nomor_meja = $no_meja");
}
function update_status($no_meja){
  $query = $this->db->query("update meja set status = 'Available' where nomor_meja = $no_meja");
}
function ambil_jumlah_pengunjung($no_meja){
  $query = $this->db->query("select jumlah_pengunjung from meja where nomor_meja = $no_meja");
  return $query->row()->jumlah_pengunjung;
}
function update_status_pengunjung($no_meja){
  $query = $this->db->query("update pengunjung set status = 'Nonaktif' where nomor_meja = $no_meja");
}

}

?>
