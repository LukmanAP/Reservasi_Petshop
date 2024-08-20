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

		public function add_data_cat($data, $table) {
			$this->db->insert($table, $data);
		}

		public function hapus_data_cat($cat_id, $table) {
			$this->db->where($cat_id);
			$this->db->delete($table);
		}

		public function detail_edit_cat($cat_id) {
			$result = $this->db->where('cat_id', $cat_id)->get('cats');

			return $result->result();
		}

		public function update_data_cat($data, $cat_id) {
			$this->db->where('cat_id', $cat_id);
			$this->db->update('cats', $data);
		}

		public function edit_akun($user_id) {
			$result = $this->db->where('user_id', $user_id)->get('users');

			return $result->result();
		}

		public function edit($data, $user_id) {
			$this->db->where('user_id', $user_id);
			$this->db->update('users', $data);
		}

		public function detail($user_id) {
			$result = $this->db->where('user_id', $user_id)->get('users');
			return $result->result();
		}
	}
?>
