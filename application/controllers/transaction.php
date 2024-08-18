<?php 
	class Transaction extends CI_Controller {
		
		public function tampil_transaksi_grooming($user_id) {

			$data['transaksi'] = $this->model_transaction->tampil_transaksi($user_id);

			$this->load->view('tamplates/header');
			$this->load->view('tamplates/navbar');
			$this->load->view('transaction/transaction_grooming', $data);
			$this->load->view('tamplates/footer');
		}
	}

?>
