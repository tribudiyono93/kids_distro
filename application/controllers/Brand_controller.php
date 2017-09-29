<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brand_Controller extends MY_Controller {

    public function __construct()
	{

		parent::__construct();
		if($this->session->userdata('login_status') == FALSE){
			redirect();
		}

		$this->load->model('Brand_model');
		 
	}

	public function index()
	{
		$config['base_url']			= base_url('index.php/Brand_controller/index');
		$config['total_rows']		= $this->Brand_model->get_total_rows();
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
		$data['brands']			= $this->Brand_model->get_brands($config["per_page"], $data['page']);
		$this->views('brand/index',$data); 
	}

	public function add()
	{		 
		$this->views('brand/tambah');
	}
	

	public function save() {
		
		//get all data
		$data['id_brand'] 			= $this->input->post('id_brand');
		$data['brand_name'] 		= $this->input->post('brand_name');
		$data['description'] 		= $this->input->post('description');
		$data['creation_time']		= date("Y-m-d H:i:s");
		$data['created_by']			= $this->session->userdata('username');
		$data['updated_time']		= date("Y-m-d H:i:s");
		$data['updated_by']			= $this->session->userdata('username');

		$brand = $this->Brand_model->get_brand_by_id($data['id_brand']);

		
		if ( (!isset($brand)) && (count($brand) >= 1) ) {
			$this->session->set_flashdata('error_msg', 'Failed Insert Data, Kode brand sudah ada, silahkan ganti dengan yang lain.');
			redirect('index.php/Brand_controller');
		} else {
			$is_success = $this->Brand_model->save($data);
			if ($is_success) {
				$this->session->set_flashdata('success_msg', 'Success Insert Data');
				redirect('index.php/Brand_controller');
			} else {
				$this->session->set_flashdata('error_msg', 'Failed Insert Data');
				redirect('index.php/Brand_controller');
			}
		}
	}

	public function edit($id_brand)
	{
		$data['brand'] = $this->Brand_model->get_brand_by_id($id_brand);

		$this->views('brand/ubah',$data);
	}

	public function update() 
	{
		//get all data
		$id_brand					= $this->input->post('id_brand');
		$data['brand_name'] 		= $this->input->post('brand_name');
		$data['description'] 	    = $this->input->post('description');
		$data['updated_time']		= date("Y-m-d H:i:s");
		$data['updated_by']			= $this->session->userdata('username');
		$is_success = $this->Brand_model->update($id_brand, $data);
		if ($is_success) {
			$this->session->set_flashdata('success_msg', 'Success update data');
			redirect('index.php/Brand_controller');
		} else {
			$this->session->set_flashdata('error_msg', 'Failed update data');
			redirect('index.php/Brand_controller');
		}
	}

	public function delete($id_brand)
	{
		$is_success = $this->Brand_model->delete($id_brand);
		if ($is_success) {
			$this->session->set_flashdata('success_msg', 'Success delete data');
			redirect('index.php/Brand_controller');
		} else {
			$this->session->set_flashdata('error_msg', 'Failed delete data');
			redirect('index.php/Brand_controller');
		}
	}
	public function search() 
	{
		$keyword = $this->input->post('keyword');
		
		$data['brands'] = $this->Brand_model->search($keyword);
		$this->views('brand/cari', $data);
	}

}

/* End of file Brand_controller.php */
/* Location: ./application/controllers/Brand_controller.php */