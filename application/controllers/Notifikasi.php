
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notifikasi extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
    $this->load->model('M_pilihmeja');
    $data['barang']= $this->M_pilihmeja->lihatStatus();
		$this->load->view('v_notif',$data);

	}
	public function remove(){
		$pilihan=$this->input->post('pilihan');
		$this->session->unset_userdata('no_meja'.$pilihan);
		for($i=1 ; $i<=9; $i++){
			if($this->session->userdata('no_meja'.$i) != TRUE && $i==9){
					$this->session->unset_userdata('notif');
			}
		}
		redirect('Notifikasi');
	}
}
?>
