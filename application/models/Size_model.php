<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Size_model extends CI_Model {

	public  function save($data) 
	{
		return $this->db->insert('sizes', $data);
	}

	public function get_total_rows()
	{
		$this->db->select('id_size');
		$query = $this->db->get('sizes');
		return $query->num_rows();
	}

	public function get_all_size()
	{
		$sql 		= "select id_size, size_type, information from sizes order by id_size asc";
		$query 		= $this->db->query($sql);
		return $query->result_array();
	}

	public function get_sizes($limit, $offset)
	{
		$sql 		= "select id_size, size_type, information from sizes order by id_size asc limit " . $limit. " 
					offset " . $offset . "";
		$query 		= $this->db->query($sql);
		return $query->result_array();
	}

	public function delete($id_size)
	{
		$this->db->where('id_size', $id_size);
		return $this->db->delete('sizes');
	}

	public function get_size_by_id($id_size)
	{
		$this->db->select('id_size, size_type, information');
		$this->db->where('id_size', $id_size);
		$query = $this->db->get('sizes');
		return $query->row_array();
	}

	public function update($id_size, $data) 
	{
		$this->db->where('id_size', $id_size);
		return $this->db->update('sizes', $data);
	}	

	public function search($keyword) 
	{
		$sql 		= "select id_size, size_type, information from sizes where size_type like '" .$keyword. "%' order by creation_time desc ";
		$query 		= $this->db->query($sql);
		return $query->result_array();
	}

}

/* End of file size_model.php */
/* Location: ./application/models/size_model.php */