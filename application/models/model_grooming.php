<?php

	class Model_grooming extends CI_Model {
		
		public function tampil_data_paket() {
			$this->db->where('layanan', 'paket');
			return $this->db->get('service_grooming');
		}

		public function tampil_data_satuan() {
			$this->db->where('layanan', 'satuan');
			return $this->db->get('service_grooming');
		}

		public function detail_grooming($id_grooming) {
			$result = $this->db->where('id_grooming',$id_grooming)->get('service_grooming');
			if($result->num_rows() > 0) {
				return $result->result();
			} else {
				return false;
			}
		} 

		public function reservasi_grooming($id_grooming) {
			$this->db->where('id_grooming',$id_grooming);
			$query = $this->db->get('service_grooming');
			return $query->row();
		}

		public function tambah_reservasi($data, $table) {
			return $this->db->insert($table, $data);
		}
	}
?>
