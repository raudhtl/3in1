<?php
class M_pembayaran extends CI_Model {
  function data_menu($meja){
    $query = $this-> db ->query ("select distinct memesan_makanan.nama_menu, sum(jumlah) as total, harga  from memesan_makanan, menu where id_pengunjung IN (select id_pengunjung from pengunjung where nomor_meja = $meja) and menu.nama_menu=memesan_makanan.nama_menu group by nama_menu");
    return $query->result();
  }
  function data_orang($meja){
    $nama = $this-> db ->query ("select * from pengunjung where nomor_meja=$meja");


    foreach($nama->result_array() as $roww){
      $i=1;
        $b = $roww['nama'];
        $query = $this-> db ->query ("select memesan_makanan.nama_menu, harga, jumlah from memesan_makanan, pengunjung, menu where pengunjung.nama='$b' and pengunjung.nomor_meja = $meja and memesan_makanan.nama_menu = menu.nama_menu and memesan_makanan.id_pengunjung=pengunjung.id_pengunjung");
        foreach ($query->result_array() as $row){
          $a = $roww['nama'];
          echo $a;
          $data[$a]['nama_menuu'.$i] = $row['nama_menu'];
          $data[$a]['hargaa'.$i] = $row['harga'];
          $data[$a]['jumlahh'.$i] =$row['jumlah'];
          $i++;

        }
        $this->session->set_userdata('i', $i);

    }
    return $data;
  }

}

?>
