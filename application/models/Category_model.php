<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model {

	public  function save($data) 
	{
		return $this->db->insert('product_categories', $data);
	}

	public function get_total_rows()
	{
		$this->db->select('id_product_category');
		$query = $this->db->get('product_categories');
		return $query->num_rows();
	}

	public function get_categories($limit, $offset)
	{
		$sql 		= "select id_product_category, product_category_name, description from product_categories order by creation_time desc limit " . $limit. " 
					offset " . $offset . "";
		$query 		= $this->db->query($sql); 
		return $query->result_array();
	}

	public function delete($id_product_category)
	{
		$this->db->where('id_product_category', $id_product_category);
		return $this->db->delete('product_categories');
	}

	public function get_categories_by_id($id_product_category)
	{
		$this->db->select('id_product_category, product_category_name, description');
		$this->db->where('id_product_category', $id_product_category);
		$query = $this->db->get('product_categories');
		return $query->row_array();
	}

	public function update($id_product_category, $data) 
	{
		$this->db->where('id_product_category', $id_product_category);
		return $this->db->update('product_categories', $data);
	}

	public function search($keyword) 
	{
		$sql 		= "select id_product_category, product_category_name, description from product_categories where product_category_name like '" .$keyword. "%' order by creation_time desc ";
		$query 		= $this->db->query($sql);
		return $query->result_array();
	}

}

/* End of file category_model.php */
/* Location: ./application/models/category_model.php */