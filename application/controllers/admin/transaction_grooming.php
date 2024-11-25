<?php 
	class Transaction_grooming extends CI_Controller {

		public function tampil_pembayaran() {

			$data['transaksi'] = $this->model_transaction_grooming->tampil_data_pembayaran();

			$this->load->view('tamplates_admin/header');
			$this->load->view('tamplates_admin/sidebar');
			$this->load->view('admin/pembayaran/proses_pembayaran', $data);
			$this->load->view('tamplates_admin/footer');
		}

		public function update_status($id_transaction) {
			$this->model_transaction_grooming->update_status($id_transaction);

			redirect('admin/transaction_grooming/tampil_pembayaran');

		}

		public function transaksi_hari_ini() {

			$data['transaksi'] = $this->model_transaction_grooming->transaksi_hari_ini();

			$this->load->view('tamplates_admin/header');
			$this->load->view('tamplates_admin/sidebar');
			$this->load->view('admin/pembayaran/transaksi_hari_ini', $data);
			$this->load->view('tamplates_admin/footer');
		}

		public function transaksi_keseluruhan() {
			$data['transaksi'] = $this->model_transaction_grooming->transaksi_keseluruhan();

			$this->load->view('tamplates_admin/header');
			$this->load->view('tamplates_admin/sidebar');
			$this->load->view('admin/pembayaran/transaksi_keseluruhan', $data);
			$this->load->view('tamplates_admin/footer');
		
		}

		public function update_status_selesai($transaction_id) {
			$this->model_transaction_grooming->update_status_selesai($transaction_id);

			redirect('admin/transaction_grooming/transaksi_hari_ini');
		}

		public function update_status_selesai1($transaction_id) {
			$this->model_transaction_grooming->update_status_selesai($transaction_id);

			
			redirect('admin/transaction_grooming/transaksi_keseluruhan');
		}
		public function transaksi_selesai() {

			$data['transaksi'] = $this->model_transaction_grooming->transaksi_selesai();


			$this->load->view('tamplates_admin/header');
			$this->load->view('tamplates_admin/sidebar');
			$this->load->view('admin/pembayaran/transaksi_selesai',$data);
			$this->load->view('tamplates_admin/footer');
		}

		public function detail_data($transaction_id) {

			$data['detail'] = $this->model_transaction_grooming->detail_data($transaction_id);

			$this->load->view('tamplates_admin/header');
			$this->load->view('tamplates_admin/sidebar');
			$this->load->view('admin/pembayaran/detail_data', $data);
			$this->load->view('tamplates_admin/footer');
		}

		public function search_user() {
			$name = $this->input->get('search'); 
			$data['transaksi'] = $this->model_transaction_grooming->search_user($name);

			$this->load->view('tamplates_admin/header');
			$this->load->view('tamplates_admin/sidebar');
			$this->load->view('admin/pembayaran/transaksi_selesai',$data);
			$this->load->view('tamplates_admin/footer');

		}
	}
?>
