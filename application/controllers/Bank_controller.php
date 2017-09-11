<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bank_controller extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		 
	}

	public function index()
	{
		$this->views('bank/index');	
	}

	public function add( )
	{
		$this->views('bank/tambah');
	}

	public function save() {

	}

	public function edit( )
	{
		$this->views('bank/ubah');
	}

	public function update() {

	}

	public function delete() {
		
	}

}

/* End of file Bank_controller.php */
/* Location: ./application/controllers/Bank_controller.php */