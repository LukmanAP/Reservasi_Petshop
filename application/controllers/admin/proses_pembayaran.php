<?php 
	class Proses_pembayaran extends CI_Controller {

		public function tampil_pembayaran() {

			$data['transaksi'] = $this->model_pembayaran->tampil_data_pembayaran();

			$this->load->view('tamplates_admin/header');
			$this->load->view('tamplates_admin/sidebar');
			$this->load->view('admin/pembayaran/proses_pembayaran', $data);
			$this->load->view('tamplates_admin/footer');
		}

		public function update_status($id_transaction) {
			$this->model_pembayaran->update_status($id_transaction);

			redirect('admin/proses_pembayaran/tampil_pembayaran');

		}
	}
?>
