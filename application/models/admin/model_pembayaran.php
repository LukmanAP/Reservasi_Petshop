<?php 
	class Model_pembayaran extends CI_Model {

		public function tampil_data_pembayaran() {
			$this->db->select('transaction_grooming.*,users.name as user_name, cats.name as cat_name, service_grooming.name as grooming_name');
			$this->db->from('transaction_grooming');
			$this->db->join('users', 'users.user_id = transaction_grooming.user_id');
			$this->db->join('cats', 'cats.cat_id = transaction_grooming.id_cat');
			$this->db->join('service_grooming', 'service_grooming.id_grooming = transaction_grooming.grooming_id');
			$this->db->where('transaction_grooming.status', 'proses'); // Menambahkan kondisi untuk status "proses"

			$result = $this->db->get();
			return $result->result();		
		}

		public function update_status($transaction_id) {
			$this->db->where('transaction_id', $transaction_id);
			$this->db->update('transaction_grooming', array('status' => 'Sudah Terbayar'));
		}
	}

?>
