<?php 

	class Model_transaction_pethotel extends CI_Model {

		public function tampil_data_pembayaran() {
			$this->db->select('transaction_pethotel.*,cats.name as cat_name, service_grooming.name as grooming_name');
			$this->db->from('transaction_pethotel');
			$this->db->join('cats', 'cats.cat_id = transaction_pethotel.id_cat');
			$this->db->join('service_grooming', 'service_grooming.id_grooming = transaction_pethotel.grooming_id', 'left');
			$this->db->where('transaction_pethotel.status', "Proses");

			$result = $this->db->get();
			return $result->result();
		}

		public function update_status($transaction_id) {
			$this->db->where('transaction_id', $transaction_id);
			$this->db->update('transaction_pethotel', array('status' => 'Sudah Terbayar'));
		}

		public function batalkan_status($transaction_id) {
			$this->db->where('transaction_id', $transaction_id);
			$this->db->update('transaction_pethotel', array('status' => 'Dibatalkan'));
		}

		public function transaksi_hari_ini() {
			$this->db->select('transaction_pethotel.*,cats.name as cat_name, service_grooming.name as grooming_name');
			$this->db->from('transaction_pethotel');
			$this->db->join('cats', 'cats.cat_id = transaction_pethotel.id_cat');
			$this->db->join('service_grooming', 'service_grooming.id_grooming = transaction_pethotel.grooming_id', 'left');
			$this->db->where('transaction_pethotel.status', "Sudah Terbayar");
			$this->db->where('DATE(transaction_pethotel.date_checkin)', date('Y-m-d')); // Kondisi untuk tanggal hari ini

			$result = $this->db->get();
			return $result->result(); 
		}

		public function update_status_checkin($transaction_id) {
			$this->db->where('transaction_id', $transaction_id);
			$this->db->update('transaction_pethotel', array('status' => 'Checkin'));
		}

		public function update_status_checkout($transaction_id) {
			$this->db->where('transaction_id', $transaction_id);
			$this->db->update('transaction_pethotel', array('status' => 'Selesai'));
		}

		public function transaksi_berlangsung(){
			$this->db->select('transaction_pethotel.*,cats.name as cat_name, service_grooming.name as grooming_name');
			$this->db->from('transaction_pethotel');
			$this->db->join('cats', 'cats.cat_id = transaction_pethotel.id_cat');
			$this->db->join('service_grooming', 'service_grooming.id_grooming = transaction_pethotel.grooming_id', 'left');
			$this->db->where('transaction_pethotel.status', "Checkin");

			$result = $this->db->get();
			return $result->result(); 
		}

		public function transaksi_selesai() {
			$this->db->select('transaction_pethotel.*,cats.name as cat_name, service_grooming.name as grooming_name');
			$this->db->from('transaction_pethotel');
			$this->db->join('cats', 'cats.cat_id = transaction_pethotel.id_cat');
			$this->db->join('service_grooming', 'service_grooming.id_grooming = transaction_pethotel.grooming_id', 'left');
			$this->db->where('transaction_pethotel.status', "Selesai");

			$result = $this->db->get();
			return $result->result(); 
		}

		public function search_user($name) {
			$this->db->select('transaction_pethotel.*, cats.name as cat_name, service_grooming.name as grooming_name');
			$this->db->from('transaction_pethotel');
			$this->db->join('cats', 'cats.cat_id = transaction_pethotel.id_cat');
			$this->db->join('service_grooming', 'service_grooming.id_grooming = transaction_pethotel.grooming_id', 'left');
			$this->db->like('cats.name', $name);

			$result = $this->db->get();
			return $result->result();

		}

		public function detail_data($transaction_id) {
			$this->db->select('transaction_pethotel.*,users.name as user_name, cats.name as cat_name, service_grooming.name as grooming_name');
			$this->db->from('transaction_pethotel');
			$this->db->join('users','users.user_id = transaction_pethotel.user_id');
			$this->db->join('cats', 'cats.cat_id = transaction_pethotel.id_cat');
			$this->db->join('service_grooming', 'service_grooming.id_grooming = transaction_pethotel.grooming_id', 'left');
			$this->db->where('transaction_pethotel.transaction_id', $transaction_id);

			$result = $this->db->get();
			return $result->result();
		}


	}

?>
