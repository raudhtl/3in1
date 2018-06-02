<?php
class Login extends CI_Controller{
  function index(){

    $this->load->database();
		$this->load->helper("url");
		$this->load->helper('form');
		$this->load->view('v_login');

  }
  function input ()
	{
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');

		if($this->form_validation->run() != false){

		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$this->load->model('M_Login');
		$cek_user = $this->M_Login->login_user($username, $password);

		$data = $cek_user->row_array();


		if (isset($data) && count ($data) >0){
				$this->session->set_userdata('masuk', TRUE);
				$this->session->set_userdata('ses_level',$data['level_akses']);
  			$this->session->set_userdata('ses_username',$data['username']);
				redirect('Pilih_meja');

		}
    else {
				$url=base_url();
    		echo $this->session->set_flashdata('msg','Username Atau Password Salah');
				redirect('Login');

		}
	}else{
			echo $this->session->set_flashdata('msg', validation_errors());
			redirect('Login');
	}

	}
	function logout (){
		$this->session->unset_userdata('masuk', 'ses_level', 'ses_username', 'id_pengunjung', 'no_meja');
		$url=base_url('');
		redirect('dashboard');
	}

}
?>
