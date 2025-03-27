<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . '/libraries/vendor/autoload.php'; // Pastikan path ini benar

class M_pdf {
    public $pdf;

    public function __construct() {
        // Inisialisasi objek mPDF
        $this->pdf = new \Mpdf\Mpdf();
    }

    // Metode untuk menghasilkan PDF
    public function generate_pdf($html, $filename) {
        // Menulis HTML ke dalam PDF
        $this->pdf->WriteHTML($html);
        // Menghasilkan dan mengunduh PDF
        $this->pdf->Output($filename, 'D'); // 'D' untuk download
    }
}
