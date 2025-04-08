<?php 
	class Transaction_pethotel extends CI_Controller {
		public function tampil_transaction($user_id) {
			
			$data['transaksi'] = $this->model_pethotel->tampil_transaction($user_id);

			$this->load->view('tamplates/header');
			$this->load->view('tamplates/navbar');
			$this->load->view('pethotel/transaction_pethotel',$data);
			$this->load->view('tamplates/footer');
		}

		public function pembayaran($transaction_id) {

			$transaksi = $this->model_pethotel->data_transaksi($transaction_id);

			$check_in = new DateTime($transaksi->date_checkin);
			$check_out = new DateTime($transaksi->date_checkout);
			$interval = $check_in->diff($check_out);
			$days = $interval->days;

			$cat_name = $transaksi->cat_name;

			$daily_rate = 50000;
   			$stay_cost = $days * $daily_rate;

			$food_cost = $transaksi->bring_food == 1 ? ($stay_cost * 10 / 100) : 0;

			$grooming_cost = $transaksi->grooming_price;

			$total_cost = $stay_cost - $food_cost + $grooming_cost;

			$data = [
				'transaksi' => $transaksi,
				'cat_name' => $cat_name,
				'days' => $days,
				'stay_cost' => $stay_cost,
				'food_cost' => $food_cost,
				'grooming_cost' => $grooming_cost,
				'total_cost' => $total_cost
			];

			$this->load->view('tamplates/header');
			$this->load->view('tamplates/navbar');
			$this->load->view('pethotel/pembayaran', $data);
			$this->load->view('tamplates/footer');
		}

		public function upload_bukti($transaction_id) {
			// Periksa apakah ada file yang diupload
			if (empty($_FILES['bukti_pembayaran']['name'])) {
				$this->session->set_flashdata('error', 'Tidak ada file yang diunggah');
				redirect('pethotel/transaction_pethotel/tampil_transaction/'.$this->session->userdata('user_id'));
			}
		
			// Dapatkan ekstensi file
			$file_ext = pathinfo($_FILES['bukti_pembayaran']['name'], PATHINFO_EXTENSION);
			$allowed_ext = ['jpg', 'jpeg', 'png', 'gif'];
			
			// Periksa ekstensi file
			if (!in_array(strtolower($file_ext), $allowed_ext)) {
				$this->session->set_flashdata('error', 'Format file tidak didukung. Hanya file JPG, JPEG, PNG, atau GIF yang diperbolehkan.');
				redirect('pethotel/transaction_pethotel/tampil_transaction/'.$this->session->userdata('user_id'));
			}
		
			// Konfigurasi upload
			$config['upload_path'] = './assets/bukti';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$config['max_size'] = 2048; // 2MB
			$config['encrypt_name'] = TRUE; // Enkripsi nama file
		
			$this->load->library('upload', $config);
		
			if (!$this->upload->do_upload('bukti_pembayaran')) {
				$error = $this->upload->display_errors();
				$this->session->set_flashdata('error', 'Upload gagal: '.$error);
				redirect('pethotel/transaction_pethotel/tampil_transaction/'.$this->session->userdata('user_id'));
			}
		
			// Jika upload berhasil
			$upload_data = $this->upload->data();
			$data = array(
				'image' => $upload_data['file_name'],
				'status' => 'Proses'
			);
		
			$this->model_pethotel->upload_bukti($transaction_id, $data);
			$this->session->set_flashdata('success', 'Bukti pembayaran berhasil diupload');
			redirect('pethotel/transaction_pethotel/tampil_transaction/'.$this->session->userdata('user_id'));
		}


		public function riwayat_pethotel($user_id) {
			$data['riwayat'] = $this->model_pethotel->riwayat_pethotel($user_id);

			$this->load->view('tamplates/header');
			$this->load->view('tamplates/navbar');
			$this->load->view('pethotel/riwayat_pethotel', $data);
			$this->load->view('tamplates/footer');
		}

		public function bukti_pembayaran($transaction_id) {
			$transaksi = $this->model_pethotel->data_transaksi($transaction_id);

			$check_in = new DateTime($transaksi->date_checkin);
			$check_out = new DateTime($transaksi->date_checkout);
			$interval = $check_in->diff($check_out);
			$days = $interval->days;

			$cat_name = $transaksi->cat_name;

			$daily_rate = 50000;
   			$stay_cost = $days * $daily_rate;

			$food_cost = $transaksi->bring_food == 1 ? ($stay_cost * 10 / 100) : 0;

			$grooming_cost = $transaksi->grooming_price;

			$total_cost = $stay_cost - $food_cost + $grooming_cost;

			$data = [
				'transaksi' => $transaksi,
				'cat_name' => $cat_name,
				'days' => $days,
				'stay_cost' => $stay_cost,
				'food_cost' => $food_cost,
				'grooming_cost' => $grooming_cost,
				'total_cost' => $total_cost
			];

			$this->load->view('tamplates/header');
			$this->load->view('tamplates/navbar');
			$this->load->view('pethotel/bukti_pembayaran', $data);
			$this->load->view('tamplates/footer');
		}

	}


?>

