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
		$config['base_url']			= base_url('index.php/Product_controller/index');
		$config['total_rows']		= $this->p->get_total_rows();
		$config['per_page']			= 4;
		$config["uri_segment"] 		= 3;
        $choice 					= $config["total_rows"] / $config["per_page"];
        $config["num_links"] 		= floor($choice);
        $config['full_tag_open']	= '<ul class="pagination pagination-sm no-margin pull-right">';
		$config['full_tag_close']	= '</ul>';
		$config['first_link'] 		= false;
		$config['last_link'] 		= false;
		$config['prev_link']		= '&laquo;';
		$config['next_link']		= '&raquo;';
		$config['prev_tag_open']	= '<li>';
		$config['prev_tag_close']	= '</li>';
		$config['next_tag_open']	= '<li>';
		$config['next_tag_close']	= '</li>';
		$config['cur_tag_open'] 	= '<li class="active"><a href="#">';
        $config['cur_tag_close'] 	= '</a></li>';
        $config['num_tag_open'] 	= '<li>';
        $config['num_tag_close'] 	= '</li>';
        $this->pagination->initialize($config);
        $data['page'] 				= ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['pagination']			= $this->pagination->create_links();
        $current_url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $url = array(
        	'previous_url' => $current_url
        );
        $this->session->set_userdata($url);
		$data['products']			= $this->p->get_products($config["per_page"], $data['page']); 
		$this->views('product/index',$data);	
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
		$image_name = $image_prefix.".jpg";
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
						'id_size'		=> $value,
						'stock_product'		=> $stock_product[$key],
						'price'			=> $price[$key],
						'status'		=> $status[$key],
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
		$new_input_form 		.=  "<div class='col-sm-2'><select name='id_size[]'' class='form-control'>";
		
		foreach($sizes as $row) {
			$new_input_form 	.= "<option value='". $row['id_size'] . "'>" . $row['size_type'] ."</option>";
		}
        
        $new_input_form 		.= "</select></div><div class='col-md-2'><input name='stock_product[]'' required='required'";
        $new_input_form 		.= "type='number' value='1' min='1' class='form-control' placeholder='stok'/></div>";
        $new_input_form 		.= "<div class='col-md-2'><input name='price[]'' required='required' type='number'";
        $new_input_form 		.= "class='form-control' placeholder='price' /></div><div class='col-sm-2'><select name='status[]'' class='form-control'><option value='Stok Promo'>Stok Promo</option><option value='Stok Baru'>Stok Baru</option></select></div><div class='col-md-1'><a href='#' class='remove_field'>remove</a></div></div></div>";
        echo $new_input_form;
	}

	public function edit($id_product, $id_detail_product)
	{
		$data['brands'] 		= $this->b->get_all_brand();
		$data['categories']		= $this->c->get_all_category();
		$data['sizes']			= $this->s->get_all_size();
		$data['product'] = $this->p->get_product_detail_by_id_product_and_id_product_detail($id_product, $id_detail_product);
		$this->views('product/ubah', $data);
	}

	public function update() {
		$image_prefix = "product-".date('dmYHis').rand (1000,9999); 
		$image_name = $image_prefix.".jpg";
		$config['upload_path']          = 'assets/img/product';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['overwrite']			= TRUE;
		$config['file_name']			= $image_name;
		$this->load->library('upload', $config);

		$id_product 					= $this->input->post('id_product');
		$product_data = array (
				'id_brand'				=> $this->input->post('id_brand'),
				'id_product_category'	=> $this->input->post('id_product_category'),
				'product_name'			=> $this->input->post('product_name'),
				'color'					=> $this->input->post('color'),
				'information'			=> $this->input->post('information'),
				'updated_time'			=> date("Y-m-d H:i:s"),
				'updated_by'			=> $this->session->userdata('username')
		);

		$id_detail_product 		= $this->input->post('id_detail_product');
		$product_detail_data = array (
			'id_size'			=> $this->input->post('id_size'),
			'stock_product'		=> $this->input->post('stock_product'),
			'price'				=> $this->input->post('price'),
			'status'			=> $this->input->post('status'), 
			'updated_time'		=> date("Y-m-d H:i:s"),
			'updated_by'		=> $this->session->userdata('username')
		);

		if($this->upload->do_upload('image')) {
			$product_data['image'] 	= $image_name;
		}

		$status_product = $this->p->update_product_data($id_product, $product_data);
		$status_product_detail = $this->p->update_detail_product_data($id_product, $id_detail_product, $product_detail_data);

		if ($status_product && $status_product_detail) {
			$this->session->set_flashdata('success_msg',"Berhasil update product");
			redirect('index.php/product_controller');
		} else {
			$this->session->set_flashdata('error_msg',"Gagal update product");
			redirect('index.php/product_controller');
		}


	}

	public function detail($id_product, $id_detail_product)
	{
		$data['product'] = $this->p->get_product_detail_by_id_product_and_id_product_detail($id_product, $id_detail_product);
		$this->views('product/detail_product',$data);
	} 

	public function search() 
	{
		$keyword = $this->input->post('keyword');
		
		$data['products'] = $this->p->search($keyword);
		$this->views('product/cari', $data);
	}

	
}
/* End of file Product_controller.php */
/* Location: ./application/controllers/Product_controller.php */
