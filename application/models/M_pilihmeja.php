
<?php
class M_pilihmeja extends CI_Model {
  function lihatStatus(){
    $query = $this->db->query("select * from meja");
    return $query->result();
  }
	function setStatus($pilihan){
   $query = $this->db->query("update meja set status = 'Booked' where nomor_meja = '$pilihan'");
  }
  function cekPassword($pilihan, $password){
    $query = $this ->db->query("select * from meja where password = MD5('$password') and nomor_meja = '$pilihan'");
		return $query;
  }
}

?>
