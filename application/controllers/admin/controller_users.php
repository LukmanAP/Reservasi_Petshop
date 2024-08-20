<?php 
	class Controller_users extends CI_Controller {
		public function __construct() {
			parent:: __construct();

			if ($this->session->userdata('role_id') != 2){
				redirect('auth/login');
			}
		}
		
		public function data_users() {

			$data['users'] = $this->model_users->tampil_data_users();
			$data['admin'] = $this->model_users->tampil_data_admin();

			$this->load->view('tamplates_admin/header');
			$this->load->view('tamplates_admin/sidebar');
			$this->load->view('admin/data_users', $data);
			$this->load->view('tamplates_admin/footer');
		}

		public function tambah_admin() {
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$phone = $this->input->post('phone');
			$address = $this->input->post('address');
			$role_id = 2;

			$data = array(
				'name' => $name,
				'email' => $email,
				'password' => $password,
				'phone' => $phone,
				'address' => $address,
				'role_id' => $role_id,
			);

			$this->model_users->tambah_admin($data, 'users');
			redirect('admin/controller_users/data_users');
		}

		public function search_users() {
			$name = $this->input->get('search'); 
			$data['users'] = $this->model_users->search_users($name); 

			$this->load->view('tamplates_admin/header');
			$this->load->view('tamplates_admin/sidebar');
			$this->load->view('admin/data_users', $data);
			$this->load->view('tamplates_admin/footer');
		}

		public function edit($user_id) {
			$data['users'] = $this->model_users->edit($user_id);
			
			$this->load->view('tamplates_admin/header');
			$this->load->view('tamplates_admin/sidebar');
			$this->load->view('admin/edit', $data);
			$this->load->view('tamplates_admin/footer');
		}

		public function edit_data($user_id) {
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$phone = $this->input->post('phone');
			$address = $this->input->post('address');

			$data = array(
				'name' => $name,
				'email' => $email,
				'password' => $password,
				'phone' => $phone,
				'address' => $address,
			);

			$this->model_users->edit_data($data, $user_id);
			redirect('admin/controller_users/data_users');
		}

		public function detail($user_id) {
			$data['users'] = $this->model_users->detail($user_id);

			$this->load->view('tamplates_admin/header');
			$this->load->view('tamplates_admin/sidebar');
			$this->load->view('admin/detail', $data);
			$this->load->view('tamplates_admin/footer');
		}

		public function hapus($user_id) {
			$where = array('user_id' => $user_id);
			$this->model_users->hapus($where, 'users');
			redirect('admin/controller_users/data_users');
		}
	}
?>
