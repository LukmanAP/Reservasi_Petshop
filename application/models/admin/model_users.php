<?php 
	class Model_users extends CI_Model{
		
		public function tampil_data_users() {
			$role_id = 1;

			$this->db->where('role_id',$role_id);
			$this->db->limit(20);
			$query = $this->db->get('users');

			return $query->result();
		}

		public function tampil_data_admin() {
			$role_id = 2;

			$this->db->where('role_id',$role_id);
			$this->db->limit(20);
			$query = $this->db->get('users');

			return $query->result();
		}

		public function tambah_admin($data, $table) {
			$this->db->insert($table, $data);
		}

		public function search_users($name) {
			$this->db->like('name', $name);
			$query = $this->db->get('users');

			return $query->result();
		}

		public function edit($user_id) {
			$result = $this->db->where('user_id', $user_id)->get('users');

			return $result->result();
		}

		public function edit_data($data, $user_id) {
			$this->db->where('user_id', $user_id);
			$this->db->update('users', $data);
		}

		public function detail($user_id) {
			$result = $this->db->where('user_id', $user_id)->get('users');
			return $result->result();
		}

		public function hapus($where, $table){
			$this->db->where($where);
			$this->db->delete($table);
		}
	}
?>
