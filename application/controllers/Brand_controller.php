<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Brand_controller extends MY_Controller {
    public function __construct()
	{
		parent::__construct();
		 
	}
	public function index()
	{
		$this->views('brand/index');
		// $this->load->view('templates/header');
		// $this->load->view('templates/left_menu');
		// $this->load->view('masterview/brand/index');
		// $this->load->view('templates/footer');
	}
	public function add()
	{
		$this->views('brand/tambah');
		// $this->load->view('templates/header');
		// $this->load->view('templates/left_menu');
		// $this->load->view('masterview/brand/tambah');
		// $this->load->view('templates/footer');
	}
	public function edit()
	{
		$this->views('brand/ubah');
	}
}
/* End of file Brand_controller.php */
/* Location: ./application/controllers/Brand_controller.php */