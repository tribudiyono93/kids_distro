<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sale_model extends CI_Model {

	public  function save_temp_transaction($data) 
	{
		return $this->db->insert('temp_transactions', $data);
	}

	public function get_temp_transaction_by_username($username) {
		$sql 		= "select tt.id, tt.username, tt.id_product, tt.id_detail_product, tt.quantity, p.product_name, p.image, s.size_type, pd.price from temp_transactions tt, products p, product_details pd, sizes s  where tt.id_product = p.id_product and tt.id_detail_product = pd.id_detail_product and pd.id_size = s.id_size and tt.username ='" . $username . "'";
		$query 		= $this->db->query($sql);
		return $query->result_array();
	}

	public function delete_temp_transaction_by_id($id_temp_transaction){
		$this->db->where('id', $id_temp_transaction);
		return $this->db->delete('temp_transactions');
	}
}
?>