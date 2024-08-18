<?php 
	class Grooming extends CI_Controller {

		public function __construct() {
			parent:: __construct();

			if ($this->session->userdata('role_id') != 1){
				redirect('auth/login');
			}
		}

		public function reservasi_grooming($id_grooming,$user_id) {
			$data['grooming'] = $this->model_grooming->reservasi_grooming($id_grooming);
			$data['cats'] = $this->model_cat->data_cat($user_id);

			$this->load->view('tamplates/header');
			$this->load->view('tamplates/navbar');
			$this->load->view('grooming/reservasi_grooming',$data);
			$this->load->view('tamplates/footer');
		}

	}
?>
