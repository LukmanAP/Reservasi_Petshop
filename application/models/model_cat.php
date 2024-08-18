<?php 
	class Model_cat extends CI_Model {

		public function detail_user($user_id) {
			$result = $this->db->where('user_id',$user_id)->get('users');
			if($result->num_rows() > 0) {
				return $result->result();
			} else {
				return false;
			}
		} 

		public function data_cat($user_id) {
			$result = $this->db->where('user_id',$user_id)->get('cats');

			return $result->result();
		}
	}
?>
