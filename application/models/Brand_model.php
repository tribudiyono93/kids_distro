<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brand_model extends CI_Model {

	public  function save($data) 
	{
		return $this->db->insert('brands', $data);
	}

	public function get_total_rows()
	{
		$this->db->select('id_brand');
		$query = $this->db->get('brands');
		return $query->num_rows();
	}

	public function get_all_brand() {
		$sql 		= "select id_brand, brand_name, description from brands order by creation_time desc";
		$query 		= $this->db->query($sql);
		return $query->result_array();
	}

	public function get_brands($limit, $offset)
	{
		$sql 		= "select id_brand, brand_name, description from brands order by creation_time desc limit " . $limit. " 
					offset " . $offset . "";
		$query 		= $this->db->query($sql);
		return $query->result_array();
	}

	public function delete($id_brand)
	{
		$this->db->where('id_brand', $id_brand);
		return $this->db->delete('brands');
	}

	public function get_brand_by_id($id_brand)
	{
		$this->db->select('id_brand, brand_name, description');
		$this->db->where('id_brand', $id_brand);
		$query = $this->db->get('brands');
		return $query->row_array();
	}

	public function update($id_brand, $data) 
	{
		$this->db->where('id_brand', $id_brand);
		return $this->db->update('brands', $data);
	}

	public function search($keyword) 
	{
		$sql 		= "select id_brand, brand_name, description from brands where lower(brand_name) like '" .$keyword. "%' order by creation_time desc ";
		$query 		= $this->db->query($sql);
		return $query->result_array();
	}

}

/* End of file Brand_model.php */
/* Location: ./application/models/Brand_model.php */