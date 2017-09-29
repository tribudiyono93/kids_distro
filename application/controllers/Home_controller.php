<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_controller extends MY_Controller {
	
	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('login_status') == FALSE){
			redirect();
		}
		//Load Dependencies
		//buat ga balik
		// if (empty($this->session->userdata('id'))) {

		// 	redirect('Login');
		// }
	}
	public function index()
	{
		$this->views('home/index');
		// $this->load->view('templates/header');
		// $this->load->view('templates/left_menu');
		// $this->load->view('masterview/home/index');
		// $this->load->view('templates/footer');
	}
}