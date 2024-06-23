<?php
class Pesanan extends CI_Controller {


    public function index() {
        $data['menu'] = $this->ModelMenu->get_all_paket();

        $this->load->view('front/partials/header', $data);
        $this->load->view('pesanan/pesanan_form', $data);
        $this->load->view('front/partials/footer', $data);
    }

    public function create() {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nama_pelanggan', 'Nama pelanggan', 'required');
        $this->form_validation->set_rules('id_menu', 'id_menu', 'required');
        $this->form_validation->set_rules('quantity', 'Quantity', 'required|integer');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat Pengiriman', 'required');
        $this->form_validation->set_rules('deskripsi_pesanan', 'Deskripsi', 'required');

        if ($this->form_validation->run() === FALSE) {
            $data['menu'] = $this->ModelMenu->get_all_menu();
            $this->load->view('pesanan/pesanan_form', $data);
        } else {
            $data = array(
                'nama_pelanggan' => $this->input->post('nama_pelanggan'),
                'id_menu' => $this->input->post('id_menu'),
                'quantity' => $this->input->post('quantity'),
                'tanggal' => $this->input->post('tanggal'),
                'alamat' => $this->input->post('alamat'),
                'deskripsi_pesanan' => $this->input->post('deskripsi_pesanan')
            );

            $this->ModelPesanan->create_pesanan($data);
            $id_pesanan = $this->db->insert_id();
            redirect('pesanan/invoice/'. $id_pesanan);
        }
    }

    public function invoice($id_pesanan) {
        $data['pesanan'] = $this->ModelPesanan->get_pesanan($id_pesanan);

        $this->load->view('front/partials/header', $data);
        $this->load->view('home/invoice', $data);
        $this->load->view('front/partials/footer', $data);


    }
    public function pesanan_data()
    {
        $data = [
            "pesanan" => $this->ModelPesanan->get()->result()
        ];
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/header', $data);
		$this->load->view('admin/data_pesanan', $data);
		$this->load->view('templates/footer', $data);
    }

    public function status_pesanan($id_pesanan)
    {
        $data = [
            "pesanan" => $this->ModelPesanan->get_pesanan($id_pesanan)
        ];
        $this->load->view('partials/header', $data);
        $this->load->view('pesanan/status_pesanan', $data);
        $this->load->view('partials/footer', $data);

    }
}
?>
