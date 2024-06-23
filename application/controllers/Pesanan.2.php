<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesanan extends CI_Controller
{
	public function index()
	{
		$menu = $this->ModelMenu->getMenu();
		$data['menu'] = $menu;
		$this->load->view('front/partials/header');
		$this->load->view('home/front/home', $data);
		$this->load->view('front/partials/footer');
	}

}