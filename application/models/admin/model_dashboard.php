<?php 
	class Model_dashboard extends CI_Model{
		public function jumlah_grooming() {
			$this->db->where('status', 'Proses');  // Sesuaikan dengan status di database Anda
			return $this->db->count_all_results('transaction_grooming');
		}

		public function jumlah_transaksi_hari_ini() {
			$this->db->where('status', 'Sudah Terbayar'); // Kondisi untuk status "Sudah Terbayar"
			$this->db->where('DATE(date)', date('Y-m-d')); // Kondisi untuk tanggal hari ini

			return $this->db->count_all_results('transaction_grooming');
		}

		public function jumlah_pethotel() {
			$this->db->where('status', 'Proses');  // Sesuaikan dengan status di database Anda
			return $this->db->count_all_results('transaction_pethotel');
		}

		public function checkin_hari_ini() {
			$this->db->where('status', "Sudah Terbayar");
			$this->db->where('DATE(date_checkin)', date('Y-m-d'));

			return $this->db->count_all_results('transaction_pethotel');
		}

		public function sedang_menginap() {
			$this->db->where('status', "Checkin");

			return $this->db->count_all_results('transaction_pethotel');
		}
	}

?>
