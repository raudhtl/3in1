
<?php
class PilihMenu extends CI_Controller{
  function index(){
    $this->load->helper("url");
    $this->load->helper('form');

    $this->load->database();
    $this->load->model('M_pilih_menu');
    $data['barang']= $this->M_pilih_menu->ambil_menu();
    $this->load->view('v_pilih_menu', $data);
  }
  function pilih (){
    if ($this->session->userdata('tambah') == TRUE){
      $this->load->model('M_pilih_menu');
      $meja = $this->session->userdata('no_meja');
      $nama = $this->session->userdata('nama');
      $id_pengunjung = $this->M_pilih_menu->ambil_id_pengunjung($meja, $nama);
      for($i=0; $i<2; $i++) {
      $data = array(
      'nama_menu' => $this->input->post("menu".$i) ,
      'jumlah' => $this->input->post("jumlah".$i),
      'id_pengunjung' => $id_pengunjung
    );
        $this->db->insert('memesan_makanan', $data);
      }
      redirect('lihatpesanan');
    }else{
      for($i=0; $i<2; $i++) {
        $data = array(
        'nama_menu' => $this->input->post("menu".$i) ,
        'jumlah' => $this->input->post("jumlah".$i),
        'id_pengunjung' => $this->session->userdata('id_pengunjung'));
          $this->db->insert('memesan_makanan', $data);

      }
      redirect('identitas');
    }

  }
  function tambah (){
    $nama =  $this->input->post('tambah');
    $this->session->set_userdata('nama',$nama);
    var_dump($nama);
    redirect('PilihMenu');
  }
}
 ?>
