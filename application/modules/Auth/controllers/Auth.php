<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Customer_model', 'customer');
    }

    public function register()
    {
        $data = [
            'title' => 'Register',
            'content' => 'register'
        ];

        $this->load->view('layouts/main', $data);
    }

    public function registerAction()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->register();
        } else {
            $nama           = $this->input->post('nama');
            $username       = $this->input->post('username');
            $alamat         = $this->input->post('alamat');
            $gender         = $this->input->post('gender');
            $no_telepon     = $this->input->post('no_telepon');
            $no_ktp         = $this->input->post('no_ktp');
            $password       = md5($this->input->post('password'));
            $role_id        = '2';

            $data = array(
                'nama'          => $nama,
                'username'      => $username,
                'alamat'        => $alamat,
                'gender'        => $gender,
                'no_telepon'    => $no_telepon,
                'no_ktp'        => $no_ktp,
                'password'      => $password,
                'role_id'       => $role_id
            );

            $this->customer->insert_data($data, 'customer');
            $this->session->set_flashdata('pesan', 'Data Berhasil ditambahkan');

            redirect('auth/login');
        }
    }

    public function login()
    {
        $data = [
            'title' => 'Login',
            'content' => 'login'
        ];

        $this->load->view('layouts/main', $data);
    }

    public function loginAction()
    {
        $this->_rulesLogin();

        if ($this->form_validation->run() == FALSE) {
            $this->login();
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $cek = $this->customer->cekLogin($username, $password);

            if ($cek == FALSE) {
                $this->session->set_flashdata('pesan', 'Username Atau Password Salah');
                redirect('auth/login');
            } else {
                $this->session->set_userdata('username', $cek->username);
                $this->session->set_userdata('role_id', $cek->role_id);
                $this->session->set_userdata('nama', $cek->nama);

                if ($cek->role_id == 1) {
                    redirect('dashboard');
                } elseif ($cek->role_id == 2) {
                    redirect('home');
                } else {
                    echo "Role ID tidak ada";
                }
            }
        }
    }

    public function gantiPassword()
    {
        $data = [
            'title' => 'Ganti Password',
            'content' => 'gantiPassword'
        ];

        $this->load->view('../../layouts_admin/main', $data);
    }

    public function changePasswordAction()
    {
        $new_password = $this->input->post('new_password');
        $repeat_password = $this->input->post('repeat_password');

        $this->form_validation->set_rules('new_password', 'Password Baru', 'required|matches[repeat_password]');
        $this->form_validation->set_rules('repeat_password', 'Ulangi Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->gantiPassword();
        } else {
            $data = array('password' => md5($new_password));
            $id = array('id_customer' => $this->session->userdata('id_customer'));

            $this->customer->update_password($id, $data, 'customer');
            $this->session->set_flashdata('pesan_login', 'Password Berhasil diupdate, Silahkan Login!');

            redirect('auth/login');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();

        redirect('home');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('no_telepon', 'No. Telepon', 'required');
        $this->form_validation->set_rules('no_ktp', 'No. KTP', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
    }

    public function _rulesLogin()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
    }
}
