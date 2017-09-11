<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_controller extends MY_Controller {
	
	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		//buat ga balik
		// if (empty($this->session->userdata('id'))) {
		// 	redirect('Login');
		// }
	}
	public function index()
	{
		$this->views('user/index');
		// $this->load->view('templates/header');
		// $this->load->view('templates/left_menu');
		// $this->load->view('masterview/home/index');
		// $this->load->view('templates/footer');
	}

	public function add() {

	}

	public function save() {

	}

	public function edit($username) {

	}

	public function update() {

	}

	public function delete($username) {

	}
}