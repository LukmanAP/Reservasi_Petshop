<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('tamplates/header');
		$this->load->view('tamplates/navbar');
		$this->load->view('dashboard');
		$this->load->view('tamplates/footer');
	}

	public function grooming() {
		$data['grooming'] = $this->model_grooming->tampil_data()->result();

		$this->load->view('tamplates/header');
		$this->load->view('tamplates/navbar');
		$this->load->view('grooming/layanan_grooming', $data);
		$this->load->view('tamplates/footer');
	}
	public function detail_grooming($id_grooming) {
		$data['grooming'] = $this->model_grooming->detail_grooming($id_grooming); 

		$this->load->view('tamplates/header');
		$this->load->view('tamplates/navbar');
		$this->load->view('grooming/detail_grooming', $data);
		$this->load->view('tamplates/footer');
		
	}
	
}
