<?php
/**
* 
*/
class Bank_model extends CI_Model {
	public  function save($data) {
		return $this->db->insert('banks', $data);
	}

	public function get_total_rows(){
		$this->db->select('id_bank');
		$query = $this->db->get('banks');
		return $query->num_rows();
	}

	public function get_banks($limit, $offset){
		$sql 		= "select id_bank, bank_name, account_number from banks order by creation_time desc limit " . $limit. " 
					offset " . $offset . "";
		$query 		= $this->db->query($sql);
		return $query->result_array();
	}

	public function delete($id_bank){
		$this->db->where('id_bank', $id_bank);
		return $this->db->delete('banks');
	}

	public function get_bank_by_id($id_bank){
		$this->db->select('id_bank, bank_name, account_number');
		$this->db->where('id_bank', $id_bank);
		$query = $this->db->get('banks');
		return $query->row_array();
	}

	public function update($id_bank, $data) {
		$this->db->where('id_bank', $id_bank);
		return $this->db->update('banks', $data);
	}
}
?>