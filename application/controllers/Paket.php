<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paket extends CI_Controller {

	public function index()
	{
		$menu= $this->ModelMenu->getMenu();
		$data['menu'] = $menu;
		$this->load->view('front/partials/header');
		$this->load->view('front/daftar_paket',$data);
		$this->load->view('front/partials/footer');
	}

}
