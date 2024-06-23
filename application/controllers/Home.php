<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function index()
	{
		$menu = $this->ModelMenu->getMenu();
		$data['menu'] = $menu;
		$this->load->view('front/partials/header');
		$this->load->view('home/front/home', $data);
		$this->load->view('front/partials/footer');
	}
	public function invoice($id_pesanan) {
        $data['pesanan'] = $this->ModelPesanan->get_pesanan($id_pesanan);
        $this->load->view('home/invoice', $data);
    }

}