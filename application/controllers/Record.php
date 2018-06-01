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

		if($this->session->flashdata('pilihan') == TRUE){
			if($this->session->flashdata('nomor') == TRUE){
				$waktu = $this->session->flashdata('waktu');
				$nomor_meja = $this->session->flashdata('nomor_meja');
				$data['record'] = $this->M_record->cari_record1($waktu, $nomor_meja);
			}
			elseif ($this->session->flashdata('nama') == TRUE) {
				$waktu = $this->session->flashdata('waktu');
				$nama = $this->session->flashdata('nama_p');
				$nomor_meja = $this->session->flashdata('nomor_meja');
				$data['record'] = $this->M_record->cari_record2($waktu, $nomor_meja, $nama);
			}else{
				$waktu = $this->session->flashdata('waktu');
				$data['record'] = $this->M_record->cari_record($waktu);
			}
		}
		else{
			$data['record'] = $this->M_record->record_hari_ini();
		}
				$this->load->view('v_record', $data);
	}

	public function cari(){

		$this->load->model('M_record');
		$pilihan = $this->input->post('berdasarkan');
		$waktu = $this->input->post('waktu');
		$this->session->set_flashdata('waktu', $waktu);
		if ($pilihan == 1){
			$this->session->set_flashdata('pilihan', TRUE);
			$this->session->set_flashdata('nomor', TRUE);
			$this->session->set_flashdata('nomor_meja',  $this->input->post('nomor_meja'));
		}
		elseif ($pilihan == 2) {
			$this->session->set_flashdata('pilihan', TRUE);
			$this->session->set_flashdata('nama', TRUE);
			$this->session->set_flashdata('nama_p', $this->input->post('nama'));
			$this->session->set_flashdata('nomor_meja',  $this->input->post('nomor_meja'));
		}
		else{
			$this->session->set_flashdata('pilihan', TRUE);

		}
					redirect('Record');
	}

}
