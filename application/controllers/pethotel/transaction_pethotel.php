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
			$gambar = $_FILES['bukti_pembayaran']['name'];

			if ($gambar == '') {
				echo "Tidak ada file yang diunggah"; die;
			} else {
				$config['upload_path'] = './assets/bukti_pethotel';
				$config['allowed_types'] = 'jpg|png|gif';

				$this->load->library('upload', $config);

				if (!$this->upload->do_upload('bukti_pembayaran')) {
					echo "Upload Gagal"; die;
				} else {
					$gambar = $this->upload->data('file_name');
				}

				$data = array(
					'image' => $gambar,
					'status' => 'Proses'
				);

				$this->model_pethotel->upload_bukti($transaction_id, $data);
			}
			redirect('pethotel/transaction_pethotel/tampil_transaction/'.$this->session->userdata('user_id'));
		}

		public function riwayat_pethotel($user_id) {
			$data['riwayat'] = $this->model_pethotel->riwayat_pethotel($user_id);

			$this->load->view('tamplates/header');
			$this->load->view('tamplates/navbar');
			$this->load->view('pethotel/riwayat_pethotel', $data);
			$this->load->view('tamplates/footer');
		}

	}


?>

