<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stock_model extends CI_Model {

	//stok produk
	public function get_total_rows()
	{
		$this->db->select('id_detail_product');
		$query = $this->db->get('product_details');
		return $query->num_rows();
	}

	public function get_productdetails($limit, $offset) 
	{
		$sql 		= "select pc.product_category_name, p.id_brand, p.product_name, p.color, p.information, p.image, s.size_type, pd.stock_product, pd.status, pd.price, pd.id_detail_product from product_details pd join products p on pd.id_product = p.id_product join product_categories pc on p.id_product_category = pc.id_product_category join sizes s on pd.id_size = s.id_size order by pd.creation_time desc limit " . $limit. " offset " . $offset . "";
		$query 		= $this->db->query($sql);
		return $query->result_array();
	}

	public function updateStatDetail($param,$id)
	{
			$this->db->set('status',$param);
			$this->db->where('id_detail_product',$id);
			$query = $this->db->update('product_details');
	}

	public function search($keyword) 
	{
		$sql 		= "select pc.product_category_name, p.id_brand, p.product_name, p.color, p.information, p.image, s.size_type, pd.stock_product, pd.status, pd.price, pd.id_detail_product from product_details pd join products p on pd.id_product = p.id_product join product_categories pc on p.id_product_category = pc.id_product_category join sizes s on pd.id_size = s.id_size and lower (s.size_type) like '" .$keyword. "%' order by pd.creation_time desc ";
		$query 		= $this->db->query($sql);
		return $query->result_array();
	}

	//end stok Produk

	//mumer stok
	public function get_mumerproductdetails($limit, $offset) 
	{
		$sql 		= "select pc.product_category_name, p.id_brand, p.product_name, p.color, p.information, p.image, s.size_type, pd.stock_product, pd.status, pd.price, pd.id_detail_product from product_details pd join products p on pd.id_product = p.id_product join product_categories pc on p.id_product_category = pc.id_product_category join sizes s on pd.id_size = s.id_size where pd.status='Stok Promo' order by pd.creation_time desc  limit " . $limit. " offset " . $offset . "";
		$query 		= $this->db->query($sql);
		return $query->result_array();
	}

	public function get_total_rows_mumer()
	{
		$this->db->select('id_detail_product');
		$this->db->where('status','Stok Promo');
		$query = $this->db->get('product_details');
		return $query->num_rows();
	}
	//end mumer stok
}

/* End of file Stock_model.php */
/* Location: ./application/models/Stock_model.php */