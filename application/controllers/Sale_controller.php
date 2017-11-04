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

	public function process_transaction() {
		$sale_transaction['id_sale_transaction'] 	= $this->input->post('id_sale_transaction');
		$sale_transaction['id_bank'] 				= $this->input->post('id_bank');
		$sale_transaction['customer_name'] 			= $this->input->post('customer_name');
		$sale_transaction['phone_number'] 			= $this->input->post('phone_number');
		$sale_transaction['address'] 				= $this->input->post('address');
		$sale_transaction['tot_price'] 				= $this->input->post('tot_price');
		$sale_transaction['payment_options'] 		= $this->input->post('payment_options');
		$sale_transaction['sale_options'] 			= $this->input->post('sale_options');
		$sale_transaction['quantity'] 				= $this->input->post('quantity');
		$sale_transaction['shipping_charges']		= $this->input->post('shipping_charges');
		$sale_transaction['creation_time']			= date("Y-m-d H:i:s");
		$sale_transaction['created_by']				= $this->session->userdata('username');
		$sale_transaction['updated_time']			= date("Y-m-d H:i:s");
		$sale_transaction['updated_by']				= $this->session->userdata('username');

		$temp_transactions = $this->s->get_temp_transaction_by_username($this->session->userdata('username'));

		$detail_sale_transaction = array();

		$i = 0;
		foreach ($temp_transactions as $value) {
			$detail_sale_transaction[$i]['id_sale_transaction'] 	= $sale_transaction['id_sale_transaction'];	
			$detail_sale_transaction[$i]['id_product'] 				= $value['id_product'];
			$detail_sale_transaction[$i]['sale_price'] 				= $value['price'];
			$detail_sale_transaction[$i]['sale_quantity'] 			= $value['quantity'];
			$detail_sale_transaction[$i]['sale_size'] 				= $value['size_type'];
			$i++;
		}

		//save sale transaction
		$save_sale_transaction_status = $this->s->save_sale_transaction($sale_transaction);
		//save detail sale transaction
		foreach ($detail_sale_transaction as $value) {
			$data['id_sale_transaction'] 		= $value['id_sale_transaction'];
			$data['id_product'] 				= $value['id_product'];
			$data['sale_price'] 				= $value['sale_price'];
			$data['sale_quantity'] 				= $value['sale_quantity'];
			$data['sale_size'] 					= $value['sale_size'];
			$data['creation_time']				= date("Y-m-d H:i:s");
			$data['created_by']					= $this->session->userdata('username');
			$data['updated_time']				= date("Y-m-d H:i:s");
			$data['updated_by']					= $this->session->userdata('username');

			$this->s->save_detail_sale_transaction($data);
		}
		//delete temp transaction
		$this->s->delete_temp_transaction_by_username($this->session->userdata('username'));

		//kurangin stok product
		foreach ($temp_transactions as $value) {
			$detail_product = $this->p->get_detail_product_by_id_product_and_id_detail_product($value['id_product'], $value['id_detail_product']);

			$current_stock = $detail_product['stock_product'];

			$data_detail_product['stock_product'] = $current_stock - $value['quantity'];


			$this->p->update_detail_product_data($value['id_product'], $value['id_detail_product'], $data_detail_product);
		}

		redirect('index.php/sale_controller/review_transaction/'.$sale_transaction['id_sale_transaction']);
	}

	public function review_transaction($id_sale_transaction) {
		$data['sale_transaction'] = $this->s->get_sale_transaction_by_id($id_sale_transaction);
		$this->views('sale/proses_transaksi', $data);
	}

}

/* End of file Sale_controller.php */
/* Location: ./application/controllers/Sale_controller.php */