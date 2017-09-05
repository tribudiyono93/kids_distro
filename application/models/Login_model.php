<?php
/**
* 
*/
class Login_model extends CI_Model
{
	public function authenticate($username, $password){

		$this->db->select('name');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$result = $this->db->get('users');

		return $result;
	}
}
?>