<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function index()
	{
		$this->load->view('templates/sidebar');
		$this->load->view('templates/header');
		$this->load->view('admin/dashboard');
		$this->load->view('templates/footer');
		// $this->load->view('home/invoice');
	}
	public function pelanggan()
	{
		$data = [
			"pelanggan" => $this->ModelPelanggan->get_all()
		];
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/header', $data);
		$this->load->view('admin/data_pelanggan', $data);
		$this->load->view('templates/footer', $data);
	}
	public function pelanggan_add()
	{
		$this->form_validation->set_rules("nama_pelanggan", "Nama", "required|trim", [
			"required" => "%s tidak boleh kosong"
		]);
		$this->form_validation->set_rules("no_telp", "Nomor Handphone", "required|trim|numeric|min_length[10]|max_length[14]", [
			"required" => "%s tidak boleh kosong",
			"numeric" => "%s harus berupa angka",
			"min_length" => "%s terlalu pendek",
			"max_length" => "%s terlalu panjang",
		]);
		$this->form_validation->set_rules('email', 'Email', 'required|trim|is_unique[pelanggan.email]|valid_email', [
			'required' => '%s tidak boleh kosong!',
			'is_unique' => '%s sudah digunakan!',
			'valid_email' => '%s tidak valid!'
		]);
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[5]|matches[password_confirmation]', [
			'required' => '%s tidak boleh kosong!',
			'matches' => '%s tidak cocok!',
			'min_length' => '%s minimal 5 karakter!'
		]);
		$this->form_validation->set_rules('password_confirmation', 'Password Konfirmasi', 'required|trim|matches[password]', [
			'required' => '%s tidak boleh kosong!',
			'matches' => '%s tidak cocok!',
		]);
		$this->form_validation->set_rules("alamat", "Alamat", "required|trim", [
			"required" => "%s tidak boleh kosong"
		]);
		$data = [
			"nama_pelanggan" => htmlspecialchars($this->input->POST("nama_pelanggan", true)),
			"no_telp" => htmlspecialchars($this->input->POST("no_telp", true)),
			"email" => htmlspecialchars($this->input->POST("email", true)),
			"password" => password_hash($this->input->POST("password"), PASSWORD_DEFAULT),
			"alamat" => htmlspecialchars($this->input->POST("alamat", true))
		];


		if (!$this->form_validation->run()) {
			$pelanggan = $this->ModelPelanggan->getWhere(["email" => $this->session->userdata("email")])->row();
			$data = [
				"pelanggan" => $pelanggan,
				"activeLink" => "pelanggan"
			];
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/header', $data);
			$this->load->view('admin/data_pelanggan', $data);
			$this->load->view('templates/footer', $data);
		} else {
			$data = [
				"nama_pelanggan" => htmlspecialchars($this->input->POST("nama_pelanggan", true)),
				"no_telp" => htmlspecialchars($this->input->POST("no_telp", true)),
				"email" => htmlspecialchars($this->input->POST("email", true)),
				"password" => password_hash($this->input->POST("password"), PASSWORD_DEFAULT),
				"alamat" => htmlspecialchars($this->input->POST("alamat", true))
			];
			$this->ModelPelanggan->insert($data);

			$this->session->set_flashdata("alert", '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Selamat!</strong> Data pengguna telah berhasil ditambah.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect("admin/pelanggan");
		}
	}

	public function menu()
    {
        $data = [
            "menu" => $this->ModelMenu->get()->result()
        ];
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/header', $data);
		$this->load->view('admin/data_menu', $data);
		$this->load->view('templates/footer', $data);
    }
	public function pesanan()
    {
        $data = [
            "pesanan" => $this->ModelPesanan->get_all_pesanan()->result()
        ];
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/header', $data);
		$this->load->view('admin/data_pesanan', $data);
		$this->load->view('templates/footer', $data);
    }
	public function review()
    {
        $data = [
            "review" => $this->ModelReview->get()->result()
        ];
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/header', $data);
		$this->load->view('admin/data_pelanggan', $data);
		$this->load->view('templates/footer', $data);
    }
	public function admin_data()
    {
        // Fetch all admin data from the database
        $admin_data = $this->ModelAdmin->get_all_admin();

        // Ensure $admin_data is an array
        if (!is_array($admin_data)) {
            $admin_data = array();
        }

        // Pass the admin data to the view
        $data['admins'] = $admin_data;
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/header', $data);
		$this->load->view('admin/data_admin', $data);
		$this->load->view('templates/footer', $data);
    }
}