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
			$this->db->or_where('transaction_grooming.status', 'Dibatalkan');
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

		public function batalkan_transaksi_melewati_batas() {
			// Ambil waktu sekarang
			$sekarang = date('Y-m-d H:i:s');
		
			// Cari transaksi yang melewati batas waktu dan statusnya masih "Belum Terbayar"
			$this->db->where('status', 'Belum Terbayar');
			$this->db->where('payment_due_date <', $sekarang);
			$transaksi_kadaluarsa = $this->db->get('transaction_grooming')->result();
		
			// Jika ada transaksi yang kadaluarsa, ubah statusnya menjadi "Dibatalkan"
			if (!empty($transaksi_kadaluarsa)) {
				foreach ($transaksi_kadaluarsa as $transaksi) {
					$this->db->where('transaction_id', $transaksi->transaction_id);
					$this->db->update('transaction_grooming', array('status' => 'Dibatalkan'));
				}
			}
		}

		public function hapus_transaksi($transaction_id) {
			$this->db->where('transaction_id', $transaction_id);
        	$this->db->delete('transaction_grooming	');
		}

		public function hapus_transaksi1($transaction_id) {
			$this->db->where('transaction_id', $transaction_id);
        	$this->db->delete('transaction_pethotel	');
		}

	}
?>
