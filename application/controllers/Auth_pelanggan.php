<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_pelanggan extends CI_Controller
{



    public function index()
    {
        //jika statusnya sudah login, maka tidak bisa mengakses halaman login alias dikembalikan ke tampilan user
        if($this->session->userdata('email')){
            redirect('home');
        }
        $this->form_validation->set_rules('email', 'Enter Email', 'required|trim|valid_email', [
            'required' => '%s tidak boleh kosong!',
            'valid_email' => '%s tidak valid'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim', [
            'required' => '%s tidak boleh kosong!',
        ]);

        if (!$this->form_validation->run()) {
            $this->load->view('auth/login_pelanggan');
        } else {
            $this->_login();
        }
        ;
    }

    private function _login()
    {
        $email = htmlspecialchars($this->input->post('email', true));
        $password = $this->input->post('password', true);

        log_message('info', 'Login attempt with email: ' . $email);

        $pelanggan = $this->db->get_where("pelanggan", ["email" => $email])->row_array();
        if ($pelanggan) {
            log_message('info', 'User found with email: ' . $email);
            //cek password
            if (password_verify($password, $pelanggan['password'])) {
                log_message('info', 'Password verified for user: ' . $email);
                $data = [
                    'email' => $pelanggan['email']
                ];

                $this->session->set_userdata($data);
                log_message('info', 'Session set for user: ' . $email);
                redirect('home');
            } else {
                log_message('error', 'Password mismatch for user: ' . $email);
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Password salah!!</div>');
                redirect('auth_pelanggan');
            }
        } else {
            log_message('error', 'No user found with email: ' . $email);
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Email tidak terdaftar!!</div>');
            redirect('auth_pelanggan');
        }
    }
    public function register()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("nama_pelanggan", "Nama", "required|trim", [
            "required" => "%s harus diisi"
        ]);

        $this->form_validation->set_rules("no_telp", "Nomor Handphone", "required|trim|numeric|min_length[10]|max_length[14]", [
            "required" => "%s harus diisi",
            "numeric" => "%s harus berupa angka",
            "min_length" => "%s terlalu pendek",
            "max_length" => "%s terlalu panjang",
        ]);

        $this->form_validation->set_rules("email", "Email", "required|trim|valid_email|is_unique[pelanggan.email]", [
            "required" => "%s harus diisi",
            "valid_email" => "%s tidak valid",
            "is_unique" => "%s sudah terdaftar",
        ]);

        $this->form_validation->set_rules("alamat", "Alamat", "required|trim", [
            "required" => "%s harus diisi",
        ]);

        $this->form_validation->set_rules("password", "Password", "required|trim|min_length[5]|matches[password_confirmation]", [
            "required" => "%s harus diisi",
            "min_length" => "%s minimal 5 karakter",
            "matches" => "%s tidak cocok",
        ]);

        $this->form_validation->set_rules("password_confirmation", "Password Konfirmasi", "required|trim|matches[password]", [
            "required" => "%s harus diisi",
            "matches" => "%s tidak cocok",
        ]);

        if (!$this->form_validation->run()) {
            $this->load->view("auth/register_pelanggan");
        } else {
            $data = [
                "nama_pelanggan" => htmlspecialchars($this->input->POST("nama_pelanggan", true)),
                "email" => htmlspecialchars($this->input->POST("email")),
                "no_telp" => $this->input->POST("no_telp"),
                "alamat" => $this->input->POST("alamat"),
                "password" => password_hash($this->input->POST("password"), PASSWORD_DEFAULT),
            ];

            $this->ModelPelanggan->insert($data);

            $this->session->set_flashdata("alert", '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
  Registrasi Berhasil<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
            redirect("auth_pelanggan");
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Anda telah logout!!</div>');
        redirect('autentifikasi');
    }
}

