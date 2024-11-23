<?php 
	class Model_dashboard extends CI_Model{
		public function jumlah_grooming() {
			$this->db->where('status', 'Proses');  // Sesuaikan dengan status di database Anda
			return $this->db->count_all_results('transaction_grooming');
		}

		public function jumlah_pethotel() {
			$this->db->where('status', 'Proses');  // Sesuaikan dengan status di database Anda
			return $this->db->count_all_results('transaction_pethotel');
		}
	}

?>
