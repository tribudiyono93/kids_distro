<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_controller extends MY_Controller {
	
	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('login_status') == FALSE)
		{
 			redirect();
		}
		
		$this->load->model('Home_model');
	}
	
	public function index()
	{

		$data['home_product'] = $this->Home_model->dtImage();
		$this->views('home/index',$data);
		// $this->load->view('templates/header');
		// $this->load->view('templates/left_menu');
		// $this->load->view('masterview/home/index');
		// $this->load->view('templates/footer');
	}
}