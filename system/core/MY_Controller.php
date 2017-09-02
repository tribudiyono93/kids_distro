<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MY_Controller extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		//buat ga balik
		// if (empty($this->session->userdata('id'))) {
		// 	redirect('Login');
		// }
	}
	public function views($file, $data =array())
	{ 
		 
		if (count($data != 0)){
			// $this->load->view('templates/header');
		// $this->load->view('templates/left_menu');
		// $this->load->view('masterview/home/index');
		// $this->load->view('templates/footer');
			$this->load->view('templates/header',$data);
			$this->load->view('templates/left_menu'); 
			$this->load->view('masterview/' . $file, $data);
			$this->load->view('templates/footer');
		} else {
			
			$this->load->view('templates/header',$data);
			$this->load->view('templates/left_menu'); 
			$this->load->view('masterview/' . $file );
			$this->load->view('templates/footer');
		}
	}
}
/* End of file MY_Controller.php */
/* Location: .//C/xampp/htdocs/kids_distro/system/core/MY_Controller.php */