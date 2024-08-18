<?php 
	class Auth extends CI_Controller{
		public function login() {

			$this->form_validation->set_rules('email','Email','required',['required' => 'user name wajib di isi !!']);
			$this->form_validation->set_rules('password','Password','required',['required' => 'password	 name wajib di isi !!']);
			
			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('tamplates/header');
				$this->load->view('tamplates/navbar');
				$this->load->view('auth/login');
				$this->load->view('tamplates/footer');
			} else {
				$auth = $this->model_auth->cek_login();

				if($auth == FALSE) {
					$this->session->set_flashdata('pesan','
					<div class="alert alert-warning alert-dismissible fade show" role="alert">
						Username atau Password anda Salah !!
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
					</div>
				');
				redirect('auth/login');
				}
				else {
					$this->session->set_userdata('user_id', $auth->user_id);
					$this->session->set_userdata('name', $auth->name);
					$this->session->set_userdata('role_id', $auth->role_id);
					
					switch($auth->role_id) {
						case 1:
							redirect('dashboard/index');
							break;
						case 2:
							redirect('admin/dashboar_admin');
							break;
						default: break;
					}
				} 
			}	
		}

		public function logout(){
			$this->session->sess_destroy();
			redirect('auth/login');
		}


		public function registrasi() {
			$this->form_validation->set_rules('name', 'Nama', 'required',['required' => 'nama wajib di isi !']);
			$this->form_validation->set_rules('email', 'Nama', 'required',['required' => 'nama wajib di isi !']);
			$this->form_validation->set_rules('phone', 'Nama', 'required',['required' => 'nama wajib di isi !']);
			$this->form_validation->set_rules('address', 'Nama', 'required',['required' => 'nama wajib di isi !']);
			$this->form_validation->set_rules('password_1', 'Password', 'required|matches[password_2]',[
				'required' => 'Password  wajib diisi!',
				'matches' => 'Password tidak cocok!',
			]);

			$this->form_validation->set_rules('password_2', 'Password', 'required|matches[password_1]');

			if ($this->form_validation->run() == false) {
				$this->load->view('tamplates/header');
				$this->load->view('tamplates/navbar');
				$this->load->view('auth/registrasi');
				$this->load->view('tamplates/footer');
			} else {
				$data = array(
					'user_id' => '',
					'name' => $this->input->post('name'),		
					'email' => $this->input->post('email'),
					'phone' => $this->input->post('phone'),
					'address' => $this->input->post('address'),
					'password' => $this->input->post('password_1'),
					'role_id' => 1,
				);
				$this->db->insert('users', $data);
				redirect('auth/login'); 
			}
		}
	}
?>
