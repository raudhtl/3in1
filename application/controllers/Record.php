<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Record extends CI_Controller {

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
		$this->load->model('M_record');
		$data['record'] = $this->M_record->record_hari_ini();
		$this->load->view('v_record', $data);
	}
	public function cari(){
		if($this->input->post('selesai') == 0){
			redirect('Pilih_meja');
		}
		$this->load->model('M_record');
		$pilihan = $this->input->post('berdasarkan');
		$waktu = $this->input->post('waktu');
		if ($pilihan == 1){
			$this->session->set_flashdata('pilihan', TRUE);
			$nomor_meja = $this->input->post('nomor_meja');
			$data['record'] = $this->M_record->cari_record1($waktu, $nomor_meja);
		}
		elseif ($pilihan == 2) {
			$this->session->set_flashdata('pilihan', TRUE);
			$nomor_meja = $this->input->post('nomor_meja');
			$nama = $this->input->post('nama');
			$data['record'] = $this->M_record->cari_record2($waktu, $nomor_meja, $nama);
		}
		else{
			$data['record'] = $this->M_record->cari_record($waktu);
		}
		$this->load->view('v_record', $data);
	}

}
