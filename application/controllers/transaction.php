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
			// Periksa apakah ada file yang diupload
			if (empty($_FILES['bukti_pembayaran']['name'])) {
				$this->session->set_flashdata('error', 'Tidak ada file yang diunggah');
				redirect('transaction/tampil_transaksi_grooming/'.$this->session->userdata('user_id'));
			}
		
			// Dapatkan ekstensi file
			$file_ext = pathinfo($_FILES['bukti_pembayaran']['name'], PATHINFO_EXTENSION);
			$allowed_ext = ['jpg', 'jpeg', 'png', 'gif'];
			
			// Periksa ekstensi file
			if (!in_array(strtolower($file_ext), $allowed_ext)) {
				$this->session->set_flashdata('error', 'Format file tidak didukung. Hanya file JPG, JPEG, PNG, atau GIF yang diperbolehkan.');
				redirect('transaction/tampil_transaksi_grooming/'.$this->session->userdata('user_id'));
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
				redirect('transaction/tampil_transaksi_grooming/'.$this->session->userdata('user_id'));
			}
		
			// Jika upload berhasil
			$upload_data = $this->upload->data();
			$data = array(
				'image' => $upload_data['file_name'],
				'status' => 'Proses'
			);
		
			$this->model_transaction->upload_bukti($transaction_id, $data);
			$this->session->set_flashdata('success', 'Bukti pembayaran berhasil diupload');
			redirect('transaction/tampil_transaksi_grooming/'.$this->session->userdata('user_id'));
		}

		public function cek_transaksi_kadaluarsa() {
			$this->load->model('model_transaction');
			$this->model_transaction->batalkan_transaksi_melewati_batas();
			echo "Transaksi kadaluarsa telah diperiksa dan statusnya diubah menjadi 'Dibatalkan'.";
		}

		public function bukti_pembayaran($transaction_id) {
			
			$data['transaksi'] = $this->model_transaction->data_transaksi($transaction_id);

			$this->load->view('tamplates/header');
			$this->load->view('tamplates/navbar');
			$this->load->view('transaction/bukti_pembayaran',$data);
			$this->load->view('tamplates/footer');
		}

		public function hapus_transaksi($transaction_id) {
			$this->model_transaction->hapus_transaksi($transaction_id);

			redirect('transaction/tampil_transaksi_grooming/'.$this->session->userdata('user_id'));
		}

		public function hapus_transaksi1($transaction_id) {
			$this->model_transaction->hapus_transaksi1($transaction_id);

			redirect('pethotel/transaction_pethotel/tampil_transaction/'.$this->session->userdata('user_id'));
		}
	}

?>
