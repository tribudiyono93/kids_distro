<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stock_controller extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('login_status') == FALSE) {
 			redirect();
 		}
 		$this->load->model('Brand_model','b');
		$this->load->model('Category_model','c');
		$this->load->model('Size_model','s');
		$this->load->model('Product_model','p');
		$this->load->model('Stock_model','st');
		 
	}

	public function index()
	{
		$config['base_url']			= base_url('index.php/Stock_controller/index');
		$config['total_rows']		= $this->st->get_total_rows();
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
		$data['product_details']	= $this->st->get_productdetails($config["per_page"], $data['page']);  
		$this->views('stock/index',$data);
	}

	public function updStatusDetailProduct() 
	{
		$id = $this->input->post('id');
		$val = $this->input->post('val');
		$this->st->updateStatDetail($val,$id); 
	} 

	public function search() 
	{
		$keyword = $this->input->post('keyword');
		
		$data['product_details'] = $this->st->search($keyword);
		$this->views('stock/cari', $data);
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
		$config['base_url']			= base_url('index.php/Stock_controller/mumer_index');
		$config['total_rows']		= $this->st->get_total_rows_mumer();
		$config['per_page']			= 2;
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
		$data['product_details']	= $this->st->get_mumerproductdetails($config["per_page"], $data['page']);  
		$this->views('stock/mumer_stok',$data);
	}
}

/* End of file Goods_controller.php */
/* Location: ./application/controllers/Goods_controller.php */