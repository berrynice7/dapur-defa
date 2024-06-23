<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{



    public function index()
    {
        $this->form_validation->set_rules('email', 'Enter Email', 'required|trim|valid_email', [
            'required' => '%s tidak boleh kosong!',
            'valid_email' => '%s tidak valid'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim', [
            'required' => '%s tidak boleh kosong!',
        ]);

        if (!$this->form_validation->run()) {
            $this->load->view('auth/login');
        } else {
            $this->_login();
        }
        ;
    }

    private function _login()
    {
        $email = htmlspecialchars($this->input->post('email', true));
        $password = $this->input->post('password', true);

        $admin = $this->db->get_where("admin", ["email" => $email])->row_array();
        if ($admin) {
            //cek password
            if (password_verify($password, $admin['password'])) {
                $data = [
                    'email' => $admin['email']
                ];

                $this->session->set_userdata($data);
                redirect('admin');
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Password salah!!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Email tidak terdaftar!!</div>');
            redirect('auth');
        }
    }
    public function register()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("nama_admin", "Nama", "required|trim", [
            "required" => "%s harus diisi"
        ]);

        $this->form_validation->set_rules("no_telp", "Nomor Handphone", "required|trim|numeric|min_length[10]|max_length[14]", [
            "required" => "%s harus diisi",
            "numeric" => "%s harus berupa angka",
            "min_length" => "%s terlalu pendek",
            "max_length" => "%s terlalu panjang",
        ]);

        $this->form_validation->set_rules("email", "Email", "required|trim|valid_email|is_unique[admin.email]", [
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
            $this->load->view("auth/register");
        } else {
            $data = [
                "nama_admin" => htmlspecialchars($this->input->POST("nama_admin", true)),
                "email" => htmlspecialchars($this->input->POST("email")),
                "no_telp" => $this->input->POST("no_telp"),
                "alamat" => $this->input->POST("alamat"),
                "password" => password_hash($this->input->POST("password"), PASSWORD_DEFAULT),
            ];

            $this->ModelAdmin->insert($data);

            $this->session->set_flashdata("alert", '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
  Registrasi Berhasil<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
            redirect("auth");
        }
    }
    
}

