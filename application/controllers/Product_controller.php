<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_controller extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('login_status') == FALSE){
			redirect();
		}
		 
	}

	public function index()
	{
		$this->views('product/index');	
	}

	public function add( )
	{
		$this->views('product/tambah');
	}

	public function edit()
	{
		$this->views('product/ubah');
	}

	public function details($value='')
	{
		# code...
	}

}

/* End of file Product_controller.php */
/* Location: ./application/controllers/Product_controller.php */