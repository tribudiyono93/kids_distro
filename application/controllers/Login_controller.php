<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		//load model
		$this->load->database();
		$this->load->model('Login_model');
	}

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
		$this->load->view('login_page');
	}

	public function authenticate() {

		//load security helper
		$this->load->helper('security');

		$username = $this->security->xss_clean($this->input->post('username'));
		$password = $this->security->xss_clean($this->input->post('password'));
		$password = do_hash($password, 'md5');

		$result = $this->Login_model->authenticate($username, $password);

		if($result->num_rows() == 1){
			
			$row = $result->row();
			
			$session = array(
				'username'		=> $username,
				'name' 			=> $row->name,
				'login_status'	=> TRUE
			);
			$this->session->set_userdata($session);
			
			redirect('index.php/Brand_controller');

		}else{
			$this->session->set_flashdata('error_msg', 'username atau password salah !!!');
			redirect('index.php/Login_controller');
		}
	}

	public function logout(){
		$session = array('username', 'name', 'login_status');
		$this->session->unset_userdata($session);
		redirect();
	}
}