<?php 
	class laporan extends CI_Controller{
		// Semua Layanan Transaksi Grooming
		public function laporan_grooming() {
			$tanggal = $this->input->get('tanggal') ? $this->input->get('tanggal') : date('Y-m-d');
			
			$data['laporan'] = $this->model_laporan->laporan_hari_ini($tanggal);
			$data['laporan_transaksi'] = $this->model_laporan->laporan_transaksi($tanggal);
		
			// Load views
			$this->load->view('tamplates_admin/header');
			$this->load->view('tamplates_admin/sidebar');
			$this->load->view('admin/laporan/laporan_grooming', $data);
			$this->load->view('tamplates_admin/footer');
		}

		public function cetak_pdf() {
			$tanggal = $this->input->get('tanggal') ? $this->input->get('tanggal') : date('Y-m-d');
			
			$data['laporan'] = $this->model_laporan->laporan_hari_ini($tanggal);
			$data['laporan_transaksi'] = $this->model_laporan->laporan_transaksi($tanggal);
			$data['tanggal'] = $tanggal;
		
			// Load library mPDF
			$this->load->library('m_pdf');
		
			// Buat PDF
			$html = $this->load->view('admin/laporan/laporan_grooming_pdf', $data, true);
			$this->m_pdf->pdf->WriteHTML($html);
			$this->m_pdf->pdf->Output('Laporan Grooming ' . $tanggal . '.pdf', 'D');
		}

		public function laporan_transaksi_bulanan() {
			// Ambil bulan dan tahun dari input (atau gunakan bulan dan tahun saat ini)
			$bulan = $this->input->get('bulan') ? $this->input->get('bulan') : date('m');
			$tahun = $this->input->get('tahun') ? $this->input->get('tahun') : date('Y');
		
			// Ambil data laporan dari model
			$data['laporan'] = $this->model_laporan->laporan_transaksi_bulanan($bulan, $tahun);
			$data['bulan'] = $bulan;
			$data['tahun'] = $tahun;
		
			// Load library mPDF
			$this->load->library('M_pdf');
		
			// Load view ke dalam string
			$html = $this->load->view('admin/laporan/laporan_transaksi_bulanan_pdf', $data, true);
		
			// Generate PDF
			$this->m_pdf->generate_pdf($html, 'laporan_transaksi_' . $bulan . '_' . $tahun . '.pdf');
		}





		//========================= SELURUH TENTANG PETHOTEL ======================================
		public function laporan_pethotel() {
			$this->load->model('model_laporan');

			$tanggal = $this->input->get('tanggal'); 
			if (!$tanggal) {
				$tanggal = date('Y-m-d'); 
			}

			$data['transaksi'] = $this->model_laporan->laporan_hari_ini_pethotel($tanggal);
			$data['laporan_transaksi'] = $this->model_laporan->hitung_total_harga($tanggal);
			
			$this->load->view('tamplates_admin/header');
			$this->load->view('tamplates_admin/sidebar');
			$this->load->view('admin/laporan/laporan_pethotel', $data);
			$this->load->view('tamplates_admin/footer');
		}

		public function cetak_pethotel_pdf() {
			// Load model dan ambil data
			$this->load->model('model_laporan');
			$tanggal = $this->input->get('tanggal');

			if (!$tanggal) {
				$tanggal = date('Y-m-d'); 
			}

			$data['transaksi'] = $this->model_laporan->laporan_hari_ini_pethotel($tanggal);
			$data['total_harga'] = $this->model_laporan->hitung_total_harga($tanggal);
			$data['tanggal'] = $tanggal; 

			$html = $this->load->view('admin/laporan/laporan_pethotel_pdf', $data, TRUE);
			$this->load->library('M_pdf');
			$filename = "laporan_pethotel_$tanggal.pdf";
			$this->m_pdf->generate_pdf($html, $filename);
		}

		public function cetak_pethotel_pdf_bulanan() {
			// Load model
			$this->load->model('model_laporan');
		
			// Ambil parameter bulan dari query string
			$bulan = $this->input->get('bulan');
			if (!$bulan) {
				$bulan = date('Y-m'); // Jika tidak ada bulan, gunakan bulan ini
			}
		
			// Ambil data transaksi untuk bulan yang dipilih
			$data['transaksi'] = $this->model_laporan->laporan_bulan_ini_pethotel($bulan);
			$data['total_harga'] = $this->model_laporan->hitung_total_harga_bulanan($bulan);
			$data['bulan'] = $bulan; // Kirim variabel $bulan ke view
		
			// Load view untuk PDF
			$html = $this->load->view('admin/laporan/laporan_pethotel_pdf_bulanan', $data, TRUE);
		
			// Load library M_pdf
			$this->load->library('M_pdf');
		
			// Generate PDF
			$filename = "laporan_pethotel_bulanan_$bulan.pdf";
			$this->m_pdf->generate_pdf($html, $filename);
		}
		
		
		
	}
?>
