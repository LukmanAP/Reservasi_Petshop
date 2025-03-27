<?php 
	class Model_layanan_grooming extends CI_Model {
		public function layanan_grooming() {
			$query = $this->db->get('service_grooming');
    		return $query->result(); 
		}

		public function tambah_layanan_grooming($data, $table) {
			$this->db->insert($table, $data);
		}

		public function edit_grooming($id_grooming) {
			$result = $this->db->where('id_grooming', $id_grooming)->get('service_grooming');

			return $result->result();	
		}

		public function edit($data, $id_grooming) {
			$this->db->where('id_grooming', $id_grooming);
			$this->db->update('service_grooming', $data);
		}

		public function hapus($id_grooming, $table) {
			$this->db->where($id_grooming);
			$this->db->delete($table);
		}

	}

?>
