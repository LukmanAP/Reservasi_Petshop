<?php 
	class Cat extends CI_Controller {


		public function mycat($user_id) {
			$data['users'] = $this->model_cat->detail_user($user_id);

			$this->load->view('tamplates/header');
			$this->load->view('tamplates/navbar');
			$this->load->view('cat/mycat', $data);
			$this->load->view('tamplates/footer');
			}
	}
?>
