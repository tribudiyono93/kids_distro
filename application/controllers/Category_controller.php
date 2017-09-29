<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_controller extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('login_status') == FALSE){
			redirect();
		}

		$this->load->model('Category_model');
		 
	}

	public function index()
	{
		$config['base_url']			= base_url('index.php/Category_controller/index');
		$config['total_rows']		= $this->Category_model->get_total_rows();
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
		$data['categories']			= $this->Category_model->get_categories($config["per_page"], $data['page']);
		$this->views('category/index',$data);	
	}

	public function add( )
	{
		$this->views('category/tambah');
	}

	public function save() 
	{
		//get all data
		$data['product_category_name'] 	= $this->input->post('product_category_name');
		$data['description'] 			= $this->input->post('description');
		$data['creation_time']			= date("Y-m-d H:i:s");
		$data['created_by']				= $this->session->userdata('username');
		$data['updated_time']			= date("Y-m-d H:i:s");
		$data['updated_by']				= $this->session->userdata('username');
		 
		$is_success = $this->Category_model->save($data);
		if ($is_success) {
			$this->session->set_flashdata('success_msg', 'Success Insert Data');
			redirect('index.php/Category_controller');
		} else {
			$this->session->set_flashdata('error_msg', 'Failed Insert Data');
			redirect('index.php/Category_controller');
		}
	}

	public function edit($id_product_category)
	{
		$data['category'] = $this->Category_model->get_categories_by_id($id_product_category);
		$this->views('category/ubah',$data);
	}

	public function update() 
	{
		//get all data
		$id_product_category			= $this->input->post('id_product_category');
		$data['product_category_name'] 	= $this->input->post('product_category_name');
		$data['description'] 			= $this->input->post('description');
		$data['updated_time']			= date("Y-m-d H:i:s");
		$data['updated_by']				= $this->session->userdata('username');
		$is_success = $this->Category_model->update($id_product_category, $data);
		if ($is_success) {
			$this->session->set_flashdata('success_msg', 'Success update data');
			redirect('index.php/Category_controller');
		} else {
			$this->session->set_flashdata('error_msg', 'Failed update data');
			redirect('index.php/Category_controller');
		}
	}
	public function delete($id_product_category) 
	{		
		$is_success = $this->Category_model->delete($id_product_category);
		if ($is_success) {
			$this->session->set_flashdata('success_msg', 'Success delete data');
			redirect('index.php/Category_controller');
		} else {
			$this->session->set_flashdata('error_msg', 'Failed delete data');
			redirect('index.php/Category_controller');
		}
	}

	public function search() 
	{
		$keyword = $this->input->post('keyword');
		
		$data['categories'] = $this->Category_model->search($keyword);
		$this->views('category/cari', $data);
	}
}

/* End of file Category_controller.php */
/* Location: ./application/controllers/Category_controller.php */