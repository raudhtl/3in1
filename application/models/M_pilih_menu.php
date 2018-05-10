<?php
  class M_pilih_menu extends CI_Model {
    public function __construct() {
    $this->load->database();
}
    function ambil_menu (){
       $query = $this->db->query("select * from menu");
       return $query->result();

    }
  }
?>
