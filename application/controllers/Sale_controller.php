<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sale_controller extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('login_status') == FALSE){
			redirect();
		}
		 
	}
	
	public function index()
	{
		
	}

	public function rekap_index()
	{
		$this->views('sale/rekap_transaksi');
	}

	public function rekap_detail()
	{
		$this->views('sale/detail_rekap_transaksi');
	}

}

/* End of file Sale_controller.php */
/* Location: ./application/controllers/Sale_controller.php */