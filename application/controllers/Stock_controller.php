<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stock_controller extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('login_status') == FALSE){
			redirect();
		}
		 
	}

	public function index()
	{
		$this->views('stock/index');
	}

	public function add()
	{
		$this->views('stock/tambah');
	}

	public function edit( )
	{
		$this->views('stock/ubah');
	}

	public function mumer_index($value='')
	{
		$this->views('stock/mumer_stok');
	}
}

/* End of file Goods_controller.php */
/* Location: ./application/controllers/Goods_controller.php */