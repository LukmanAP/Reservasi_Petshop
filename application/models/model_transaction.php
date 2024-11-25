<?php 

	class Model_transaction extends CI_Model {
		
		public function tampil_transaksi($user_id) {
			$this->db->select('transaction_grooming.*, cats.name as cat_name, service_grooming.name as grooming_name');
			$this->db->from('transaction_grooming');
			$this->db->join('cats', 'cats.cat_id = transaction_grooming.id_cat');
			$this->db->join('service_grooming', 'service_grooming.id_grooming = transaction_grooming.grooming_id');
			$this->db->where('transaction_grooming.user_id', $user_id);

			// Group the OR conditions
			$this->db->group_start();
			$this->db->where('transaction_grooming.status', 'Belum Terbayar');
			$this->db->or_where('transaction_grooming.status', 'Proses');
			$this->db->or_where('transaction_grooming.status', 'Sudah Terbayar');
			$this->db->group_end();

    $result = $this->db->get();
    return $result->result();
		}

		public function tampil_riwayat($user_id) {
			$this->db->select('transaction_grooming.*, cats.name as cat_name, service_grooming.name');
			$this->db->from('transaction_grooming');
			$this->db->join('cats', 'cats.cat_id = transaction_grooming.id_cat');
			$this->db->join('service_grooming', 'service_grooming.id_grooming = transaction_grooming.grooming_id');
			$this->db->where('transaction_grooming.user_id', $user_id);
			$this->db->where('transaction_grooming.status', "Selesai");

			$result = $this->db->get();
			return $result->result();
		}

		public function data_transaksi($transaction_id) {
			$this->db->select('transaction_grooming.*, service_grooming.price');
			$this->db->from('transaction_grooming');
			$this->db->join('service_grooming', 'transaction_grooming.grooming_id = service_grooming.id_grooming');
			$this->db->where('transaction_grooming.transaction_id', $transaction_id);
			$result = $this->db->get();
			// $result = $this->db->where('transaction_id',$transaction_id)->get('transaction_grooming');

			return $result->result();
		}

		public function upload_bukti($transaction_id, $data) {
			$this->db->where('transaction_id', $transaction_id);
			return $this->db->update('transaction_grooming', $data);
		}

	}
?>
