<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

	public function dtImage()
	{
		$query = $this->db->query(" SELECT product_name, image, id_brand, color
									FROM products
									ORDER BY creation_time  
									DESC LIMIT 4
				"); 

		$data = $query->result(); 
		return $data;
	}
		

}

/* End of file Home_model.php */
/* Location: ./application/models/Home_model.php */