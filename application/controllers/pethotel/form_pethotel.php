<?php 
	class Form_pethotel extends CI_Controller {
		public function form($user_id) {

			$data['cats'] = $this->model_pethotel->form_pethotel($user_id);
			$data['grooming'] = $this->model_pethotel->grooming();
			
			$this->load->view('tamplates/header');
			$this->load->view('tamplates/navbar');
			$this->load->view('pethotel/form_pethotel', $data);
			$this->load->view('tamplates/footer');
		}

		public function reservasi_pethotel($user_id) {
			// Ambil id_cat dari input post
			$id_cat = $this->input->post('id_cat');
			$date_range = $this->input->post('date_range');
			$bring_food = $this->input->post('bring_food') ? 1 : 0; 
			$grooming = $this->input->post('grooming');
			$bank = $this->input->post('bank');
			$notes = $this->input->post('notes');

			if ($date_range) {
				// Memisahkan tanggal check-in dan check-out
				$dates = explode(" to ", $date_range);
				if (count($dates) == 2) {
					$check_in = $dates[0];
					$check_out = $dates[1];
				} else {
					$check_in = null;
					$check_out = null;
				}
			} else {
				$check_in = null;
				$check_out = null;
			}
			
			// Siapkan data yang akan diinsert
			$data = array(
				'user_id' => $user_id,
				'id_cat' => $id_cat,
				'date_checkin' => $check_in,
				'date_checkout' => $check_out,
				'bring_food' => $bring_food,
				'grooming_id' => $grooming, 
				'bank' => $bank,
				'notes' => $notes,
				
			);
		
			// Panggil model untuk melakukan insert ke database
			$this->model_pethotel->reservasi_pethotel($data, 'transaction_pethotel');
		}
		
	}
?>
