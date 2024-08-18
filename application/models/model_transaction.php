<?php 

	class Model_transaction extends CI_Model {
		
		public function tampil_transaksi($user_id) {
			$this->db->select('transaction_grooming.*, cats.name as cat_name, service_grooming.name');
			$this->db->from('transaction_grooming');
			$this->db->join('cats', 'cats.cat_id = transaction_grooming.id_cat');
			$this->db->join('service_grooming', 'service_grooming.id_grooming = transaction_grooming.grooming_id');
			$this->db->where('transaction_grooming.user_id', $user_id);
			
			$result = $this->db->get();
			return $result->result();
		}

	}
?>
