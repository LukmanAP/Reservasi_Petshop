<?php 
	class Transaction extends CI_Controller {
		
		public function tampil_transaksi_grooming($user_id) {

			$data['transaksi'] = $this->model_transaction->tampil_transaksi($user_id);

			$this->load->view('tamplates/header');
			$this->load->view('tamplates/navbar');
			$this->load->view('transaction/transaction_grooming', $data);
			$this->load->view('tamplates/footer');
		}

		public function tampil_riwayat_grooming($user_id) {
			$data['riwayat'] = $this->model_transaction->tampil_riwayat($user_id);

			$this->load->view('tamplates/header');
			$this->load->view('tamplates/navbar');
			$this->load->view('transaction/riwayat',$data);
			$this->load->view('tamplates/footer');
		}

		public function pembayaran($transaction_id) {
			
			$data['transaksi'] = $this->model_transaction->data_transaksi($transaction_id);

			$this->load->view('tamplates/header');
			$this->load->view('tamplates/navbar');
			$this->load->view('transaction/pembayaran',$data);
			$this->load->view('tamplates/footer');
		}

		public function upload_bukti($transaction_id) {
			$gambar = $_FILES['bukti_pembayaran']['name'];

			if ($gambar == '') {
				echo "Tidak ada file yang diunggah"; die;
			} else {
				$config['upload_path'] = './assets/bukti';
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

				$this->model_transaction->upload_bukti($transaction_id, $data);
			}
			redirect('transaction/tampil_transaksi_grooming/'.$this->session->userdata('user_id'));

		}
	}

?>
