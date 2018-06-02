

<?php
  class M_pilih_menu extends CI_Model {
    public function __construct() {
    $this->load->database();
}
    function ambil_menu (){
       $query = $this->db->query("select * from menu");
       return $query->result();

    }
    function ambil_id_pengunjung($meja, $nama){
      $query = $this->db->query("select id_pengunjung from pengunjung where nama = '$nama' and nomor_meja = $meja and status=''");
      return $query->row()->id_pengunjung;
    }

    function hapus_data($nama_menu,$id_pengunjung){
      $query = $this->db->query("delete from memesan_makanan where nama_menu = '$nama_menu' and id_pengunjung=$id_pengunjung");
      return $query;
    }
  }
?>
