<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_controller extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('login_status') == FALSE){
			redirect();
		}
		 
	}

	public function index()
	{
		//load database
		$this->load->database();
		//load Bank_model
		$this->load->model('User_model');
		//load pagination
		$this->load->library('pagination');

		$config['base_url']			= base_url('index.php/User_controller/index');
		$config['total_rows']		= $this->User_model->get_total_rows();
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
		$data['users']			= $this->User_model->get_users($config["per_page"], $data['page']);

		$this->views('user/index', $data);	
	}

	public function add()
	{
		$this->views('user/tambah'); 
	}

	public function save() {
		$data['username'] 		= $this->input->post('username');
		$data['name']			= $this->input->post('name');
		$data['phone_number'] 	= $this->input->post('phone_number');
		$data['address']		= $this->input->post('address');
		$data['password']		= md5($this->input->post('password'));
		$data['creation_time']	= date("Y-m-d H:i:s");
		$data['created_by']		= $this->session->userdata('username');

		//load database
		$this->load->database();
		//load Bank_model
		$this->load->model('User_model');

		$user = $this->User_model->get_user_by_id($data['username']);

		if (count($user) >= 1) {
			$this->session->set_flashdata('error_msg', 'Username telah ada, silahkan pilih yang lain');
			redirect('index.php/User_controller');
		} else {

			$is_success = $this->User_model->save($data);
			if ($is_success) {
				$this->session->set_flashdata('success_msg', 'Success Insert Data');
				redirect('index.php/User_controller');
			} else {
				$this->session->set_flashdata('error_msg', 'Failed Insert Data');
				redirect('index.php/User_controller');
			}
		}
	}

	public function edit($encrypt_username)
	{
		//load database
		$this->load->database();
		//load Bank_model
		$this->load->model('User_model');

		$username = str_replace("7633E5A9FB88D6289E7FE2DCCB33E", "@", $encrypt_username);
		$data['user'] = $this->User_model->get_user_by_id($username);
		$this->views('user/ubah', $data); 
	}

	public function update() {
		$username 				= $this->input->post('username');

		$data['name']			= $this->input->post('name');
		$data['phone_number'] 	= $this->input->post('phone_number');
		$data['address']		= $this->input->post('address');
		$data['password']		= md5($this->input->post('password'));
		$data['updated_time']	= date("Y-m-d H:i:s");
		$data['updated_by']		= $this->session->userdata('username');

		//load database
		$this->load->database();
		//load Bank_model
		$this->load->model('User_model');

		$is_success = $this->User_model->update($username, $data);

		if ($is_success) {
			$this->session->set_flashdata('success_msg', 'Success update data');
			redirect('index.php/User_controller');
		} else {
			$this->session->set_flashdata('error_msg', 'Failed update data');
			redirect('index.php/User_controller');
		}
	}

	public function search() {
		$keyword = $this->input->post('keyword');

		//load database
		$this->load->database();
		//load Bank_model
		$this->load->model('User_model');

		$data['users'] = $this->User_model->search($keyword);

		$this->views('user/cari', $data);
	}
}

/* End of file User_controller.php */
/* Location: ./application/controllers/User_controller.php */