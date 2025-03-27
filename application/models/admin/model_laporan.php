<?php 
	class Model_laporan extends CI_Model {
		public function laporan_hari_ini($tanggal = null) {
			// Jika tanggal tidak diberikan, gunakan tanggal hari ini
			if ($tanggal === null) {
				$tanggal = date('Y-m-d');
			}
		
			$this->db->select('transaction_grooming.*, users.name as user_name, cats.name as cat_name, service_grooming.name as grooming_name');
			$this->db->from('transaction_grooming');
			$this->db->join('users', 'users.user_id = transaction_grooming.user_id');
			$this->db->join('cats', 'cats.cat_id = transaction_grooming.id_cat');
			$this->db->join('service_grooming', 'service_grooming.id_grooming = transaction_grooming.grooming_id');
			$this->db->where('transaction_grooming.status', 'Selesai');
			$this->db->where('DATE(transaction_grooming.date)', $tanggal); // Filter berdasarkan tanggal
		
			$result = $this->db->get();
			return $result->result();
		}

		public function laporan_transaksi($tanggal = null) {
			$tanggal = $tanggal ? $tanggal : date('Y-m-d');
		
			// Query untuk total transaksi hari ini
			$this->db->where('DATE(date)', $tanggal);
			$this->db->where('status', 'Selesai');
			$total_transaksi = $this->db->count_all_results('transaction_grooming');
		
			// Query untuk layanan yang digunakan hari ini
			$this->db->select('service_grooming.name as layanan, COUNT(transaction_grooming.grooming_id) as total');
			$this->db->from('transaction_grooming');
			$this->db->join('service_grooming', 'service_grooming.id_grooming = transaction_grooming.grooming_id');
			$this->db->where('DATE(transaction_grooming.date)', $tanggal);
			$this->db->where('transaction_grooming.status', 'Selesai');
			$this->db->group_by('transaction_grooming.grooming_id');
			$layanan_hari_ini = $this->db->get()->result();
		
			// Query untuk total harga dalam sehari
			$this->db->select_sum('price');
			$this->db->where('DATE(date)', $tanggal);
			$this->db->where('status', 'Selesai');
			$total_harga = $this->db->get('transaction_grooming')->row()->price;
		
			return [
				'total_transaksi' => $total_transaksi,
				'layanan_hari_ini' => $layanan_hari_ini,
				'total_harga' => $total_harga ? $total_harga : 0 // Jika tidak ada data, default 0
			];
		}

		public function laporan_transaksi_bulanan($bulan, $tahun) {
			$this->db->select('service_grooming.name as grooming_name, COUNT(transaction_grooming.grooming_id) as total_transaksi, SUM(transaction_grooming.price) as total_harga');
			$this->db->from('transaction_grooming');
			$this->db->join('service_grooming', 'service_grooming.id_grooming = transaction_grooming.grooming_id');
			$this->db->where('MONTH(transaction_grooming.date)', $bulan);
			$this->db->where('YEAR(transaction_grooming.date)', $tahun);
			$this->db->group_by('transaction_grooming.grooming_id');
			
			$result = $this->db->get();
			return $result->result();
		}


		
		public function laporan_hari_ini_pethotel($tanggal) {
			$this->db->select('transaction_pethotel.*,users.name as user_name, cats.name as cat_name, service_grooming.name as grooming_name ');
			$this->db->from('transaction_pethotel');
			$this->db->join('users', 'users.user_id = transaction_pethotel.user_id');
			$this->db->join('cats', 'cats.cat_id = transaction_pethotel.id_cat');
			$this->db->join('service_grooming', 'service_grooming.id_grooming = transaction_pethotel.grooming_id', 'left');
			$this->db->where('transaction_pethotel.status', "Selesai"); // Pastikan status ini benar
			$this->db->where('DATE(transaction_pethotel.date_checkin)', $tanggal); // Filter berdasarkan tanggal yang dipilih
		
			$result = $this->db->get();
			return $result->result(); // Pastikan ini megealikan hasil yang diharapkan
		}

		public function hitung_total_harga($tanggal) {
			$this->db->select_sum('total_price', 'total_harga'); // Menghitung total harga
			$this->db->from('transaction_pethotel');
			$this->db->where('DATE(date_checkin)', $tanggal); // Filter berdasarkan tanggal yang dipilih
			$result = $this->db->get()->row_array(); // Mengambil hasil sebagai array
			return $result; // Mengembalikan total harga
		}

		public function laporan_bulan_ini_pethotel($bulan) {
			$this->db->select('transaction_pethotel.*, users.name as user_name, cats.name as cat_name, service_grooming.name as grooming_name');
			$this->db->from('transaction_pethotel');
			$this->db->join('users', 'users.user_id = transaction_pethotel.user_id');
			$this->db->join('cats', 'cats.cat_id = transaction_pethotel.id_cat');
			$this->db->join('service_grooming', 'service_grooming.id_grooming = transaction_pethotel.grooming_id', 'left');
			$this->db->where('transaction_pethotel.status', "Selesai"); // Filter status
			$this->db->where("DATE_FORMAT(transaction_pethotel.date_checkin, '%Y-%m') =", $bulan); // Filter berdasarkan bulan
			$result = $this->db->get();
			return $result->result();
		}
		
		public function hitung_total_harga_bulanan($bulan) {
			$this->db->select_sum('total_price', 'total_harga'); // Menghitung total harga
			$this->db->from('transaction_pethotel');
			$this->db->where("DATE_FORMAT(date_checkin, '%Y-%m') =", $bulan); // Filter berdasarkan bulan
			$result = $this->db->get()->row_array(); // Ambil hasil sebagai array
			return $result; // Kembalikan total harga
		}
		
		
	}

?>
