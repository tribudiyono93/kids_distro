<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {

	public  function save_product($data) 
	{
		return $this->db->insert('products', $data);
	}

	public  function save_product_detail($data) 
	{
		return $this->db->insert('product_details', $data);
	}

}

?>