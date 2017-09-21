<?php
/**
* 
*/
class User_model extends CI_Model {

	public  function save($data) {
		return $this->db->insert('users', $data);
	}

	public function get_total_rows(){
		$this->db->select('username');
		$query = $this->db->get('users');
		return $query->num_rows();
	}

	public function get_users($limit, $offset){
		$sql 		= "select username, name, address, phone_number from users order by creation_time desc limit " . $limit. " 
					offset " . $offset . "";
		$query 		= $this->db->query($sql);
		return $query->result_array();
	}

	public function get_user_by_id($username){
		$this->db->select('username, name, address, phone_number');
		$this->db->where('username', $username);
		$query = $this->db->get('users');
		return $query->row_array();
	}

	public function update($username, $data) {
		$this->db->where('username', $username);
		return $this->db->update('users', $data);
	}

	public function search($keyword) {
		$sql 		= "select username, name, address, phone_number from users where name like '" .$keyword. "%' order by creation_time desc ";
		$query 		= $this->db->query($sql);
		return $query->result_array();
	}
}

?>