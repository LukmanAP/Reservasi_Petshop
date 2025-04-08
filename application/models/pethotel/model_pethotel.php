<?php 
	class Model_pethotel extends CI_Model {

		public function form_pethotel($user_id) {
			$result = $this->db->where('user_id',$user_id)->get('cats');

			return $result->result();
		}

		public function grooming() {
			return $this->db->get('service_grooming')->result();
		}

		public function reservasi_pethotel($data, $table) {
			return $this->db->insert($table, $data);
		}

		public function tampil_transaction($user_id) {
			$this->db->select('transaction_pethotel.*, cats.name as cat_name, service_grooming.name as grooming_name');
			$this->db->from('transaction_pethotel');
			$this->db->join('cats', 'cats.cat_id = transaction_pethotel.id_cat');
			$this->db->join('service_grooming', 'service_grooming.id_grooming = transaction_pethotel.grooming_id', 'left');
			$this->db->where('transaction_pethotel.user_id', $user_id);
		
			// Group the OR conditions for the status
			$this->db->group_start();
			$this->db->where('transaction_pethotel.status', 'Belum Terbayar');
			$this->db->or_where('transaction_pethotel.status', 'Proses');
			$this->db->or_where('transaction_pethotel.status', 'Sudah Terbayar');
			$this->db->or_where('transaction_pethotel.status', 'Checkin');
			$this->db->or_where('transaction_pethotel.status', 'Dibatalkan');
			$this->db->group_end();
		
			$result = $this->db->get();
			return $result->result();
		}
		

		public function data_transaksi($transaction_id) {
			$this->db->select('transaction_pethotel.*, cats.name as cat_name, service_grooming.price as grooming_price');
			$this->db->from('transaction_pethotel');
			$this->db->join('cats', 'cats.cat_id = transaction_pethotel.id_cat');
			$this->db->join('service_grooming', 'transaction_pethotel.grooming_id = service_grooming.id_grooming', 'left');
			$this->db->where('transaction_pethotel.transaction_id', $transaction_id);
			$query = $this->db->get();
			return $query->row();
		}

		public function upload_bukti($transaction_id, $data) {
			$this->db->where('transaction_id', $transaction_id);
			return $this->db->update('transaction_pethotel', $data);
		}

		public function riwayat_pethotel($user_id) {
			$this->db->select('transaction_pethotel.*,cats.name as cat_name, service_grooming.name as grooming_name');
			$this->db->from('transaction_pethotel');
			$this->db->join('cats', 'cats.cat_id = transaction_pethotel.id_cat');
			$this->db->join('service_grooming', 'service_grooming.id_grooming = transaction_pethotel.grooming_id', 'left');
			$this->db->where('transaction_pethotel.user_id', $user_id);
			$this->db->where('transaction_pethotel.status', "Selesai");

			$result = $this->db->get();
			return $result->result();

		}

		
	}

?>
