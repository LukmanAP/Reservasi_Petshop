<?php 
 class Transaction_pethotel extends CI_Controller {

	public function tampil_pembayaran() {

		$data['transaksi'] = $this->model_transaction_pethotel->tampil_data_pembayaran();

		$this->load->view('tamplates_admin/header');
		$this->load->view('tamplates_admin/sidebar');
		$this->load->view('admin/pethotel/proses_pembayaran', $data);
		$this->load->view('tamplates_admin/footer');
	}

	public function update_status($transaction_id) {
		$this->model_transaction_pethotel->update_status($transaction_id);

			redirect('admin/transaction_pethotel/tampil_pembayaran');
	}

	public function transaksi_hari_ini() {

		$data['transaksi'] = $this->model_transaction_pethotel->transaksi_hari_ini();

		$this->load->view('tamplates_admin/header');
		$this->load->view('tamplates_admin/sidebar');
		$this->load->view('admin/pethotel/transaksi_hari_ini', $data);
		$this->load->view('tamplates_admin/footer');
	}

	public function update_status_checkin($transaction_id) {
		$this->model_transaction_pethotel->update_status_checkin( $transaction_id);

		redirect('admin/transaction_pethotel/transaksi_hari_ini');
	}

	public function transaksi_berlangsung() {

		$data['transaksi'] = $this->model_transaction_pethotel->transaksi_berlangsung();

		$this->load->view('tamplates_admin/header');
		$this->load->view('tamplates_admin/sidebar');
		$this->load->view('admin/pethotel/transaksi_berlangsung', $data);
		$this->load->view('tamplates_admin/footer');

	}


}

?>
