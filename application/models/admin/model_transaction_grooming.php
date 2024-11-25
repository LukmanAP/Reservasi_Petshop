<?php 
	class model_transaction_grooming extends CI_Model {
		
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

		public function transaksi_hari_ini() {
			$this->db->select('transaction_grooming.*, users.name as user_name, cats.name as cat_name, service_grooming.name as grooming_name');
			$this->db->from('transaction_grooming');
			$this->db->join('users', 'users.user_id = transaction_grooming.user_id');
			$this->db->join('cats', 'cats.cat_id = transaction_grooming.id_cat');
			$this->db->join('service_grooming', 'service_grooming.id_grooming = transaction_grooming.grooming_id');
			$this->db->where('transaction_grooming.status', 'Sudah Terbayar'); // Kondisi untuk status "Sudah Terbayar"
			$this->db->where('DATE(transaction_grooming.date)', date('Y-m-d')); // Kondisi untuk tanggal hari ini

			$result = $this->db->get();
			return $result->result(); 
		}

		public function transaksi_keseluruhan() {
			$this->db->select('transaction_grooming.*, users.name as user_name, cats.name as cat_name, service_grooming.name as grooming_name');
			$this->db->from('transaction_grooming');
			$this->db->join('users', 'users.user_id = transaction_grooming.user_id');
			$this->db->join('cats', 'cats.cat_id = transaction_grooming.id_cat');
			$this->db->join('service_grooming', 'service_grooming.id_grooming = transaction_grooming.grooming_id');
			$this->db->where('transaction_grooming.status', 'Sudah Terbayar');

			$result = $this->db->get();
			return $result->result(); 
		}

		public function update_status_selesai($transaction_id) {
			$this->db->where('transaction_id', $transaction_id);
			$this->db->update('transaction_grooming', array('status' => 'Selesai'));
		}

		public function transaksi_selesai() {
			$this->db->select('transaction_grooming.*, users.name as user_name, cats.name as cat_name, service_grooming.name as grooming_name');
			$this->db->from('transaction_grooming');
			$this->db->join('users', 'users.user_id = transaction_grooming.user_id');
			$this->db->join('cats', 'cats.cat_id = transaction_grooming.id_cat');
			$this->db->join('service_grooming', 'service_grooming.id_grooming = transaction_grooming.grooming_id');
			$this->db->where('transaction_grooming.status', 'Selesai');

			$result = $this->db->get();
			return $result->result(); 
		}

		public function detail_data($transaction_id) {
			$this->db->select('transaction_grooming.*,users.name as user_name, cats.name as cat_name, service_grooming.name as grooming_name, service_grooming.price as price');
			$this->db->from('transaction_grooming');
			$this->db->join('users', 'users.user_id = transaction_grooming.user_id');
			$this->db->join('cats', 'cats.cat_id = transaction_grooming.id_cat');
			$this->db->join('service_grooming', 'service_grooming.id_grooming = transaction_grooming.grooming_id');
			

			$result = $this->db->get();
			return $result->result(); 
		}

		public function search_user($name) {
			$this->db->select('
				transaction_grooming.*, 
				users.name as user_name, 
				cats.name as cat_name, 
				service_grooming.name as grooming_name
			');
			$this->db->from('transaction_grooming');
			$this->db->join('users', 'users.user_id = transaction_grooming.user_id', 'left');
			$this->db->join('cats', 'cats.cat_id = transaction_grooming.id_cat', 'left');
			$this->db->join('service_grooming', 'service_grooming.id_grooming = transaction_grooming.grooming_id', 'left');
			$this->db->like('users.name', $name); // Menghindari konflik dengan kolom 'name' lainnya

			$result = $this->db->get();
			return $result->result();

		
		}
		
	}

?>
