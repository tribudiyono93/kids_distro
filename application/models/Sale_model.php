<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sale_model extends CI_Model {

	public  function save_temp_transaction($data) 
	{
		return $this->db->insert('temp_transactions', $data);
	}

	public  function save_sale_transaction($data) 
	{
		return $this->db->insert('sale_transactions', $data);
	}

	public  function save_detail_sale_transaction($data) 
	{
		return $this->db->insert('detail_sale_transactions', $data);
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

	public function delete_temp_transaction_by_username($username){
		$this->db->where('username', $username);
		return $this->db->delete('temp_transactions');
	}


	public function get_sale_transaction_by_id($id_sale_transaction) {
		$sql 	= "select s.*, b.bank_name from sale_transactions s, banks b where s.id_bank = b.id_bank and 
				s.id_sale_transaction = '$id_sale_transaction'";
		$query 	= $this->db->query($sql);
		return $query->row_array();
	}

	public function get_total_rows()
	{
		$this->db->select('id_sale_transaction');
		$query = $this->db->get('sale_transactions');
		return $query->num_rows();
	}

	public function get_sale($limit, $offset) 
	{
		$sql 		= "select st.id_sale_transaction, st.customer_name, st.address, st.id_bank, b.bank_name, st.tot_price, st.payment_options, st.sale_options from sale_transactions st join banks b where st.id_bank = b.id_bank order by st.creation_time desc limit " . $limit. " 
					offset " . $offset . "";
		$query 		= $this->db->query($sql);
		return $query->result_array();
	}

	public function update_payment_options_by_id($id_sale_transaction, $data) { 
		$this->db->where('id_sale_transaction', $id_sale_transaction);
		return $this->db->update('sale_transactions', $data);
	}

	public function update_sale_options_by_id($id_sale_transaction, $data) { 
		$this->db->where('id_sale_transaction', $id_sale_transaction);
		return $this->db->update('sale_transactions', $data);
	}
}
?>