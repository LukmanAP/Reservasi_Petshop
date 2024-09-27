<?php 
	class Model_pethotel extends CI_Model {

		public function form_pethotel($user_id) {
			$result = $this->db->where('user_id',$user_id)->get('cats');

			return $result->result();
		}
	}

?>
