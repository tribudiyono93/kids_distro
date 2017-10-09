<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_controller extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('login_status') == FALSE){
			redirect();
		}
		$this->load->model('Brand_model','b');
		$this->load->model('Category_model','c');
		$this->load->model('Size_model','s');
		$this->load->model('Product_model','p');
		 
	}

	public function index()
	{

		$this->views('product/index');	
	}

	public function add( )
	{	
		$this->load->library('code_generator');

		$data['product_code'] 	= $this->code_generator->get_product_code();
		$data['brands'] 		= $this->b->get_all_brand();
		$data['categories']		= $this->c->get_all_category();
		$data['sizes']			= $this->s->get_all_size();

		//generate kode produk
		$this->views('product/tambah', $data);
	}

	public function store() {
		$image_prefix = "product-".date('dmYHis').rand (1000,9999); 
		$image_name = $image_prefix;

		$config['upload_path']          = 'assets/img/product';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['overwrite']			= TRUE;
		$config['file_name']			= $image_name;

		$this->load->library('upload', $config);

		if($this->upload->do_upload('image')) {
			//success upload
			$product_data = array (
				'id_product'			=> $this->input->post('id_product'),
				'id_brand'				=> $this->input->post('id_brand'),
				'id_product_category'	=> $this->input->post('id_product_category'),
				'product_name'			=> $this->input->post('product_name'),
				'color'					=> $this->input->post('color'),
				'information'			=> $this->input->post('information'),
				'image'					=> $image_name,
				'creation_time'			=> date("Y-m-d H:i:s"),
				'created_by'			=> $this->session->userdata('username'),
				'updated_time'			=> date("Y-m-d H:i:s"),
				'updated_by'			=> $this->session->userdata('username')
			);

			$status = $this->p->save_product($product_data);


			
			$id_size				= $this->input->post('id_size');
			$stock_product			= $this->input->post('stock_product');
			$price					= $this->input->post('price');
			$status					= $this->input->post('status');
			

			if ($status) {
				foreach ($id_size as $key => $value) {
					$product_detail_data = array (
						'id_product'		=> $product_data['id_product'],
						'id_size'			=> $value,
						'stock_product'		=> $stock_product[$key],
						'price'				=> $price[$key],
						'status'			=> $status[$key],
						'creation_time'		=> date("Y-m-d H:i:s"),
						'created_by'		=> $this->session->userdata('username'),
						'updated_time'		=> date("Y-m-d H:i:s"),
						'updated_by'		=> $this->session->userdata('username')
					);
					$this->p->save_product_detail($product_detail_data);
				}
			}

			$this->session->set_flashdata('success_msg',"Berhasil menambahkan data");
			redirect('index.php/product_controller');
		} else {
			//failed upload
			$error = $this->upload->display_errors();
			$this->session->set_flashdata('error_msg',$error);
			redirect('index.php/product_controller');
		}
	}

	public function get_new_input_form() {
		$sizes			= $this->s->get_all_size();

		$new_input_form 		=   "<div><br/><br/>"; 
		$new_input_form 		.=  "<div class='form-group'><div class='col-md-3'><label>Stok</label></div>";
		$new_input_form 		.= "<div class='col-sm-2'><select name='id_size[]'' class='form-control'>";
		
		foreach($sizes as $row) {
			$new_input_form 		.= "<option value='". $row['id_size'] . "'>" . $row['size_type'] ."</option>";
		}
        
        $new_input_form 		.= "</select></div><div class='col-md-2'><input name='stock_product[]'' required='required'";
        $new_input_form 		.= "type='number' value='1' min='1' class='form-control' placeholder='stok'/></div>";
        $new_input_form 		.= "<div class='col-md-2'><input name='price[]'' required='required' type='number'";
        $new_input_form 		.= "class='form-control' placeholder='price' /></div><div class='col-sm-2'><select name='status[]'' class='form-control'><option value='true'>sale</option><option value='false'>tidak sale</option></select></div><div class='col-md-1'><a href='#' class='remove_field'>remove</a></div></div></div>";

        echo $new_input_form;
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