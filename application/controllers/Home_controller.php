<?php
defined('BASEPATH') OR exit('No direct script access allowed');
<<<<<<< HEAD
class Home_controller extends MY_Controller {
	
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
		$this->views('home/index');
		// $this->load->view('templates/header');
		// $this->load->view('templates/left_menu');
		// $this->load->view('masterview/home/index');
		// $this->load->view('templates/footer');
=======

class Home_controller extends CI_Controller {

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
		$this->load->view('templates/header');
		$this->load->view('templates/left_menu');
		$this->load->view('templates/example_content');
		$this->load->view('templates/footer');
>>>>>>> b77f5adad89ba5b411ac54b1dae279801ba6e0d3
	}
}