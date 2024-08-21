<?php 
	class Proses_pembayaran extends CI_Controller {

		public function tampil_pembayaran() {
			$this->load->view('tamplates_admin/header');
			$this->load->view('tamplates_admin/sidebar');
			$this->load->view('admin/pembayaran/proses_pembayaran');
			$this->load->view('tamplates/footer');
		}
	}
?>
