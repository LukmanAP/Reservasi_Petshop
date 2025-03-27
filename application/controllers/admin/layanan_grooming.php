<?php 
	class Layanan_grooming extends CI_Controller {
		public function layanan_grooming() {

			$data['layanan'] = $this->model_layanan_grooming->layanan_grooming();


			$this->load->view('tamplates_admin/header');
			$this->load->view('tamplates_admin/sidebar');
			$this->load->view('admin/layanan_grooming/layanan_grooming', $data);
			$this->load->view('tamplates_admin/footer');
		}

		public function tambah_layanan() {
			$name = $this->input->post('name');
			$description = $this->input->post('description');
			$price = $this->input->post('price');
			$image = $_FILES['image']['name'];

			if ($image != '') {
				$config['upload_path'] = './assets/img';
				$config['allowed_types'] = 'jpg|png|gif';

				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('image')) {
					echo 'Upload foto Gagal'. $this->upload->display_errors();; die();
				} else {
					$image = $this->upload->data('file_name');
					$data['image'] = $image;  
				}
			}

			$data = array(
				'name' => $name,
				'description' => $description,
				'price' => $price,
				'image' => $image,
			);

			$this->model_layanan_grooming->tambah_layanan_grooming($data, 'service_grooming');
			redirect('admin/layanan_grooming/layanan_grooming');

			
		}

		public function edit_layanan($id_grooming) {
			$data['layanan'] = $this->model_layanan_grooming->edit_grooming($id_grooming);

			$this->load->view('tamplates_admin/header');
			$this->load->view('tamplates_admin/sidebar');
			$this->load->view('admin/layanan_grooming/edit_grooming', $data);
			$this->load->view('tamplates_admin/footer');
		}

		public function edit($id_grooming) {
			$name = $this->input->post('name');
			$description = $this->input->post('description');
			$price = $this->input->post('price');
			$image = $_FILES['image']['name'];
			
			$data = array(
				'name' => $name,
				'description' => $description,
				'price' => $price,
			);

			if ($image != '') {
				// Jika gambar diunggah
				$config['upload_path'] = './assets/img';
				$config['allowed_types'] = 'jpg|png|gif';
		
				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('image')) {
					echo "Upload Gagal"; die();
				} else {
					$image = $this->upload->data('file_name');
					$data['image'] = $image;  // Hanya tambahkan gambar ke array data jika gambar baru diunggah
				}
			}

			$this->model_layanan_grooming->edit($data, $id_grooming);
			redirect('admin/layanan_grooming/layanan_grooming');

		}

		public function hapus_layanan($id_grooming) {
			$where = array('id_grooming' => $id_grooming);
			$this->model_layanan_grooming->hapus($where, 'service_grooming');
			redirect('admin/layanan_grooming/layanan_grooming');
		}
		
		
	}

?>
