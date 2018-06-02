<?php
class M_Identitas extends CI_Model {
  function insert($nama, $meja){
    $query = $this-> db ->query ("insert into pengunjung (nomor_meja, nama) values ('$meja', '$nama')");
  }
  function ambil_id($nama, $meja){
    $query = $this -> db ->query("select * from pengunjung where nomor_meja = $meja and nama = '$nama' and status=''");
		return $query;
  }
}

?>
