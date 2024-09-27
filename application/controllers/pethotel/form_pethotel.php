<?php 
	class Form_pethotel extends CI_Controller {
		public function form($user_id) {

			$data['cats'] = $this->model_pethotel->form_pethotel($user_id);
			
			$this->load->view('tamplates/header');
			$this->load->view('tamplates/navbar');
			$this->load->view('pethotel/form_pethotel', $data);
			$this->load->view('tamplates/footer');
		}
	}
?>
