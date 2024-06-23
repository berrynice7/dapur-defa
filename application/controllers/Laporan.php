<?php
require_once 'vendor/autoload.php'; // Include DomPDF

use Dompdf\Dompdf;
use Dompdf\Options;

class Laporan extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Pesanan_model');
        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function index() {
        $data['pesanan'] = $this->ModelPesanan->get_all_pesanan();
        $this->load->view('pesanan/laporan', $data);
    }

    public function cetak() {
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');
        $data['pesanan'] = $this->ModelPesanan->get_pesanan_by_date($start_date, $end_date);
        
        $html = $this->load->view('laporan/cetak', $data, true);

        $options = new Options();
        $options->set('defaultFont', 'Courier');
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream("laporan_pesanan.pdf", array("Attachment" => 0));
    }
}
?>
