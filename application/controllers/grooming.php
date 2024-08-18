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

		public function pesan_grooming($grooming_id, $user_id ) {
			$id_cat = $this->input->post('id_cat');
			$date = $this->input->post('date');
			$bank = $this->input->post('bank');
			$notes = $this->input->post('notes');
			$date = $this->input->post('date');
			$transaction_date = date('Y-m-d H:i:s');

			$data = array(
				'user_id' => $user_id,
				'grooming_id' => $grooming_id,
				'id_cat' => $id_cat,
				'date' => $date,
				'bank' => $bank,
				'notes' => $notes,
				'transaction_date' => $transaction_date
			);
			
			$this->model_grooming->tambah_reservasi($data, 'transaction_grooming');

		}

	}
?>
