<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sale_controller extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('login_status') == FALSE){
			redirect();
		}

		$this->load->model('Bank_model','b');
		$this->load->model('Product_model','p');
		$this->load->model('Sale_model','s');
		 
	}

	public function index()
	{
		$this->views('sale/rekap_transaksi');
	}


	public function rekap_detail()
	{
		$this->views('sale/detail_rekap_transaksi');
	}

	public function get_detail_product_by_id_product($id_product) {
		$data['detail_products'] = $this->p->get_detail_product_by_id_product($id_product);
		echo $this->view('sale/first_detail_product_and_price', $data, TRUE);
		
	}

	public function add() {
		$this->load->library('code_generator');
		$data['id_sale_transaction'] = $this->code_generator->get_transaction_code();
		$data['banks'] = $this->b->get_all_banks();
		$data['products'] = $this->p->get_just_product();
		$data['temp_transactions'] = $this->s->get_temp_transaction_by_username($this->session->userdata('username'));
		//print_r($data['temp_transactions']);
 
		$this->views('sale/tambah_transaksi', $data);
	}

	public function add_temp_transaction() {
		$data['username']				= $this->session->userdata('username');
		$data['id_product'] 			= $this->input->post('id_product');
		$data['id_detail_product'] 		= $this->input->post('id_detail_product');
		$data['quantity'] 				= $this->input->post('quantity');

		$status = $this->s->save_temp_transaction($data);

		if ($status) {
			$data['products'] = $this->p->get_just_product();
			echo $this->view('sale/add_product_container', $data, TRUE);
		}
	}

	public function load_temp_transaction_table() {
		$data['temp_transactions'] = $this->s->get_temp_transaction_by_username($this->session->userdata('username'));
		echo $this->view('sale/temp_transaction_table', $data, TRUE);
	}

	public function delete_temp_transaction_by_id($id_temp_transaction) {
		$status = $this->s->delete_temp_transaction_by_id($id_temp_transaction);

		if ($status) {
			$data['temp_transactions'] = $this->s->get_temp_transaction_by_username($this->session->userdata('username'));
			echo $this->view('sale/temp_transaction_table', $data, TRUE);
		}
	}

}

/* End of file Sale_controller.php */
/* Location: ./application/controllers/Sale_controller.php */