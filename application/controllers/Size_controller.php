<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Size_controller extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('login_status') == FALSE){
			redirect();
		}

		$this->load->model('Size_model');
		 
	}

	public function index()
	{
		$config['base_url']			= base_url('index.php/Size_controller/index');
		$config['total_rows']		= $this->Size_model->get_total_rows();
		$config['per_page']			= 5;
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
		$data['sizes']			= $this->Size_model->get_sizes($config["per_page"], $data['page']);
		$this->views('size/index',$data);
	}

	public function add()
	{
		$this->views('size/tambah');
	}

	public function save() {
		//get all data
		$data['size_type'] 			= $this->input->post('size_type');
		$data['information'] 		= $this->input->post('information');
		$data['creation_time']		= date("Y-m-d H:i:s");
		$data['created_by']			= $this->session->userdata('username');
		$data['updated_time']		= date("Y-m-d H:i:s");
		$data['updated_by']			= $this->session->userdata('username');
		 
		$is_success = $this->Size_model->save($data);
		if ($is_success) {
			$this->session->set_flashdata('success_msg', 'Success Insert Data');
			redirect('index.php/Size_controller');
		} else {
			$this->session->set_flashdata('error_msg', 'Failed Insert Data');
			redirect('index.php/Size_controller');
		}
	}

	public function edit($id_size)
	{
		$data['size'] = $this->Size_model->get_size_by_id($id_size);
		$this->views('size/ubah',$data);
	}

	public function update() 
	{
		//get all data
		$id_size					= $this->input->post('id_size');
		$data['size_type'] 			= $this->input->post('size_type');
		$data['information'] 		= $this->input->post('information');
		$data['updated_time']		= date("Y-m-d H:i:s");
		$data['updated_by']			= $this->session->userdata('username');
		$is_success = $this->Size_model->update($id_size, $data);
		if ($is_success) {
			$this->session->set_flashdata('success_msg', 'Success update data');
			redirect('index.php/Size_controller');
		} else {
			$this->session->set_flashdata('error_msg', 'Failed update data');
			redirect('index.php/Size_controller');
		}
	}

	public function delete($id_size) 
	{		
		$is_success = $this->Size_model->delete($id_size);
		if ($is_success) {
			$this->session->set_flashdata('success_msg', 'Success delete data');
			redirect('index.php/Size_controller');
		} else {
			$this->session->set_flashdata('error_msg', 'Failed delete data');
			redirect('index.php/Size_controller');
		}
	}

	public function search() 
	{
		$keyword = $this->input->post('keyword');
		
		$data['sizes'] = $this->Size_model->search($keyword);
		$this->views('size/cari', $data);
	}
}

/* End of file Size_controller.php */
/* Location: ./application/controllers/Size_controller.php */