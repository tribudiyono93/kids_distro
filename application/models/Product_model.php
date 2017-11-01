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

	public function get_total_rows()
	{
		$sql = "select count(*) as total_rows from products p, product_details pd where p.id_product = pd.id_product";
		$query 		= $this->db->query($sql);
		return $query->row_array()['total_rows'];
	}

	public function get_product($limit, $offset) 
	{
		$sql 		= "select p.id_product, p.product_name, p.id_brand, p.product_name, p.color, p.information, p.image, pc.product_category_name from products p join product_categories pc where p.id_product_category = pc.id_product_category order by p.creation_time desc limit " . $limit. " 
					offset " . $offset . "";
		$query 		= $this->db->query($sql);
		return $query->result_array();
	}

	public function get_products($limit, $offset) {
		$sql 		= "select p.id_product, p.id_brand, p.id_product_category, p.product_name, p.color, p.information, p.image, b.brand_name, b.description as brand_description, pc.product_category_name, pc.description as product_category_description, pd.id_detail_product, pd.id_size, pd.stock_product, pd.price, pd.status, s.size_type, s.information as size_information from products p, brands b, product_categories pc, product_details pd, sizes s where p.id_brand = b.id_brand and p.id_product_category = pc.id_product_category and p.id_product = pd.id_product and pd.id_size = s.id_size order by p.creation_time desc limit " . $limit. " 
					offset " . $offset . "";
		$query 		= $this->db->query($sql);
		return $query->result_array();
	}

	public function get_product_detail_by_id_product_and_id_product_detail ($id_product, $id_detail_product) {
		$sql 		= "select p.id_product, p.id_brand, p.id_product_category, p.product_name, p.color, p.information, p.image, b.brand_name, b.description as brand_description, pc.product_category_name, pc.description as product_category_description, pd.id_detail_product, pd.id_size, pd.stock_product, pd.price, pd.status, s.size_type, s.information as size_information from products p, brands b, product_categories pc, product_details pd, sizes s where p.id_brand = b.id_brand and p.id_product_category = pc.id_product_category and p.id_product = pd.id_product and pd.id_size = s.id_size and p.id_product = '". $id_product . "' and pd.id_detail_product = " . $id_detail_product . "";
		$query 		= $this->db->query($sql);
		return $query->row_array();
	}

	public function getProductsById($id_product)
	{ 
		$this->db->where('id_product',$id_product); 
		$query = $this->db->get('products'); 
		if ($query->num_rows() > 0 ) { 
			return $query->row(); 
		} else { 
			return array(); 
		} 
	}

	public function getDetailProductsByIdProduct($id_product) 
	{ 
		$query = $this->db->query("
				 select s.*, pd.*  
				 from product_details pd 
				 join sizes s on pd.id_size = s.id_size
				 where pd.id_product = '$id_product' 
				 ORDER BY pd.creation_time DESC  
			   "); 
		$data = $query->result(); 
		return $data;
	}

	public function get_detail_product_by_id_product($id_product) 
	{ 
		$query = $this->db->query("select pd.*, s.* from product_details pd, sizes s where pd.id_size = s.id_size and pd.id_product = '$id_product' ORDER BY pd.creation_time DESC"); 
		$data = $query->result_array(); 
		return $data;
	}

	public function search($keyword) 
	{
		$sql 		= "select p.id_product, p.product_name, p.id_brand, p.product_name, p.color, p.information, p.image, pc.product_category_name from products p join product_categories pc where p.id_product_category = pc.id_product_category and lower (p.product_name) like '" .$keyword. "%' order by p.creation_time desc ";
		$query 		= $this->db->query($sql);
		return $query->result_array();
	}

	public function update_product_data($id_product, $product_data) {
		$this->db->where('id_product', $id_product);
		return $this->db->update('products', $product_data);
	}

	public function update_status_by_id($id_product, $id_detail_product, $data) {
		$this->db->where('id_detail_product', $id_detail_product);
		$this->db->where('id_product', $id_product);
		return $this->db->update('product_details', $data);
	}

	public function update_detail_product_data($id_product, $id_detail_product, $detail_product_data) {
		$this->db->where('id_product', $id_product);
		$this->db->where('id_detail_product', $id_detail_product);
		return $this->db->update('product_details', $detail_product_data);
	}

	public function get_just_product() {
		$sql 		= "select * from products";
		$query 		= $this->db->query($sql);
		return $query->result_array();
	}

}
?>