<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bank_controller extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		 
	}

	public function index()
	{	
		//load database
		$this->load->database();
		//load Bank_model
		$this->load->model('Bank_model');
		//load pagination
		$this->load->library('pagination');

		$config['base_url']			= base_url('index.php/Bank_controller/index');
		$config['total_rows']		= $this->Bank_model->get_total_rows();
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
		$data['banks']			= $this->Bank_model->get_banks($config["per_page"], $data['page']);

		$this->views('bank/index', $data);	
	}

	public function add( )
	{
		$this->views('bank/tambah');
	}

	public function save() {
		//get all data
		$data['bank_name'] 			= $this->input->post('bank_name');
		$data['account_number'] 	= $this->input->post('account_number');
		$data['creation_time']		= date("Y-m-d H:i:s");
		$data['created_by']			= $this->session->userdata('username');
		$data['updated_time']		= date("Y-m-d H:i:s");
		$data['updated_by']			= $this->session->userdata('username');

		//load database
		$this->load->database();
		//load Product_model
		$this->load->model('Bank_model');

		$is_success = $this->Bank_model->save($data);

		if ($is_success) {
			$this->session->set_flashdata('success_msg', 'Success Insert Data');
			redirect('index.php/Bank_controller');
		} else {
			$this->session->set_flashdata('error_msg', 'Failed Insert Data');
			redirect('index.php/Bank_controller');
		}

	}

	public function edit($id_bank)
	{
		//load database
		$this->load->database();
		//load Product_model
		$this->load->model('Bank_model');

		$data['bank'] = $this->Bank_model->get_bank_by_id($id_bank);

		$this->views('bank/ubah', $data);
	}

	public function update() {
		
		//load database
		$this->load->database();
		//load Product_model
		$this->load->model('Bank_model');

		//get all data
		$id_bank					= $this->input->post('id_bank');
		$data['bank_name'] 			= $this->input->post('bank_name');
		$data['account_number'] 	= $this->input->post('account_number');
		$data['updated_time']		= date("Y-m-d H:i:s");
		$data['updated_by']			= $this->session->userdata('username');

		$is_success = $this->Bank_model->update($id_bank, $data);

		if ($is_success) {
			$this->session->set_flashdata('success_msg', 'Success update data');
			redirect('index.php/Bank_controller');
		} else {
			$this->session->set_flashdata('error_msg', 'Failed update data');
			redirect('index.php/Bank_controller');
		}
	}

	public function delete($id_bank) {
		//load database
		$this->load->database();
		//load Bank_model
		$this->load->model('Bank_model');
		
		$is_success = $this->Bank_model->delete($id_bank);

		if ($is_success) {
			$this->session->set_flashdata('success_msg', 'Success delete data');
			redirect('index.php/Bank_controller');
		} else {
			$this->session->set_flashdata('error_msg', 'Failed delete data');
			redirect('index.php/Bank_controller');
		}
	}

	public function search() {
		$keyword = $this->input->post('keyword');

		//load database
		$this->load->database();
		//load Bank_model
		$this->load->model('Bank_model');

		$data['banks'] = $this->Bank_model->search($keyword);

		$this->views('bank/cari', $data);
	}

}

/* End of file Bank_controller.php */
/* Location: ./application/controllers/Bank_controller.php */