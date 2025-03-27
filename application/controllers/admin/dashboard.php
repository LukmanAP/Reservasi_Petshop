<?php 
	class Dashboard extends CI_Controller {
		public function __construct() {
			parent:: __construct();

			if ($this->session->userdata('role_id') != 2){
				redirect('auth/login');
			}
		}

		public function admin() {

			$data['jumlah_grooming'] = $this->model_dashboard->jumlah_grooming();
			$data['jumlah_transaksi_hari_ini'] = $this->model_dashboard->jumlah_transaksi_hari_ini();


			$data['jumlah_pethotel'] = $this->model_dashboard->jumlah_pethotel();
			$data['checkin_hari_ini'] = $this->model_dashboard->checkin_hari_ini();
			$data['sedang_menginap'] = $this->model_dashboard->sedang_menginap();

			$this->load->view('tamplates_admin/header');
			$this->load->view('tamplates_admin/sidebar');
			$this->load->view('admin/dashboard', $data);
			$this->load->view('tamplates_admin/footer');
		}

		
	}

?>
