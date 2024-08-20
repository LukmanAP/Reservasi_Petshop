<?php 
	class Cat extends CI_Controller {

		public function __construct() {
			parent:: __construct();

			if ($this->session->userdata('role_id') != 1){
				redirect('auth/login');
			}
		}

		public function mycat($user_id) {
			$data['users'] = $this->model_cat->detail_user($user_id);

			$data['cats'] = $this->model_cat->data_cat($user_id);

			$this->load->view('tamplates/header');
			$this->load->view('tamplates/navbar');
			$this->load->view('cat/mycat', $data);
			$this->load->view('tamplates/footer');
		}

		public function edit_profile($user_id) {

			$data['users'] = $this->model_cat->edit_akun($user_id);
			
			$this->load->view('tamplates/header');
			$this->load->view('tamplates/navbar');
			$this->load->view('cat/edit_akun',$data);
			$this->load->view('tamplates/footer');
		}

		public function add_cat() {
			$this->load->view('tamplates/header');
			$this->load->view('tamplates/navbar');
			$this->load->view('cat/add_cat');
			$this->load->view('tamplates/footer');
		}

		public function hapus_data_cat($cat_id, $user_id) {
			$where = array('cat_id' => $cat_id);
			$this->model_cat->hapus_data_cat($where, 'cats');
			redirect('cat/mycat/'.$user_id);

		}

		public function detail_edit_cat($cat_id) {
			$data['cats'] = $this->model_cat->detail_edit_cat($cat_id);

			$this->load->view('tamplates/header');
			$this->load->view('tamplates/navbar');
			$this->load->view('cat/detail_cat',$data);
			$this->load->view('tamplates/footer');
		}

		public function update_data_cat($cat_id, $user_id) {
			$name = $this->input->post('name');
			$breed = $this->input->post('breed');
			$age = $this->input->post('age');
			$gender = $this->input->post('gender');
			$image = $_FILES['image']['name'];

			$data = array(
				'name' => $name,
				'breed' => $breed,
				'age' => $age,
				'gender' => $gender,
			);

			if ($image != '') {
				// Jika gambar diunggah
				$config['upload_path'] = './assets/cats';
				$config['allowed_types'] = 'jpg|png|gif';
		
				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('image')) {
					echo "Upload Gagal"; die();
				} else {
					$image = $this->upload->data('file_name');
					$data['image'] = $image;  // Hanya tambahkan gambar ke array data jika gambar baru diunggah
				}
			}

			$this->model_cat->update_data_cat($data, $cat_id);
			redirect('cat/mycat/'.$user_id);
		}

		public function add_data_cat($user_id) {
			$name = $this->input->post('name');
			$breed = $this->input->post('breed');
			$age = $this->input->post('age');
			$gender = $this->input->post('gender');
			$image = $_FILES['image']['name'];

			if ($image=''){} else {
				$config['upload_path'] = './assets/cats';
				$config['allowed_types'] = 'jpg|png|gif';

				$this->load->library('upload',$config);
				if(!$this->upload->do_upload('image')) {

				} else {
					$image = $this->upload->data('file_name');
				}
			}

			$data = array(
				'user_id' => $user_id,
				'name' => $name,
				'breed' => $breed,
				'age' => $age,
				'gender' => $gender,
				'image' => $image,
				
			);

			$this->model_cat->add_data_cat($data, 'cats');
			redirect('cat/mycat/'.$user_id);

		}

		public function edit($user_id) {

			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$phone = $this->input->post('phone');
			$address = $this->input->post('address');
			$image = $_FILES['image']['name'];

			$data = array(
				'name' => $name,
				'email' => $email,
				'phone' => $phone,
				'address' => $address,
			);

			if ($image != '') {
				// Jika gambar diunggah
				$config['upload_path'] = './assets/userprofile';
				$config['allowed_types'] = 'jpg|png|gif';
		
				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('image')) {
					echo "Upload Gagal"; die();
				} else {
					$image = $this->upload->data('file_name');
					$data['image'] = $image;  // Hanya tambahkan gambar ke array data jika gambar baru diunggah
				}
			}
			$this->model_cat->edit($data, $user_id);
			redirect('cat/mycat/'.$user_id);

		}
	}
?>
