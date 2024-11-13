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
	}

?>
