<?php

	class Model_grooming extends CI_Model {
		
		public function tampil_data() {
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
	}
?>
