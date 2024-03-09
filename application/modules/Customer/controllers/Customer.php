<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Customer_model', 'customer');
    }

    public function index()
    {
        $data = [
            'title'         => 'Data Customer',
            'data_customer' => $this->customer->get_data('customer')->result(),
            'content' => 'index'
        ];

        $this->load->view('../../layouts_admin/main', $data);
    }

    public function tambahCustomer()
    {
        $data = [
            'title'         => 'Tambah Data Customer',
            'data_customer' => $this->customer->get_data('customer')->result(),
            'content'       => 'add'
        ];

        $this->load->view('../../layouts_admin/main', $data);
    }

    public function createCustomer()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambahCustomer();
        } else {
            $nama           = $this->input->post('nama');
            $username       = $this->input->post('username');
            $alamat         = $this->input->post('alamat');
            $gender         = $this->input->post('gender');
            $no_telepon     = $this->input->post('no_telepon');
            $no_ktp         = $this->input->post('no_ktp');
            $password       = $this->input->post('password');

            $data = array(
                'nama'          => $nama,
                'username'      => $username,
                'alamat'        => $alamat,
                'gender'        => $gender,
                'no_telepon'    => $no_telepon,
                'no_ktp'        => $no_ktp,
                'password'      => $password,
            );

            $this->customer->insert_data($data, 'customer');
            $this->session->set_flashdata('pesan', 'Data Berhasil ditambahkan');

            redirect('customer');
        }
    }

    public function editCustomer($id)
    {
        $where = array('id_customer' => $id);
        $data = [
            'title'         => 'Edit Data Customer',
            'data_customer' => $this->db->query("SELECT * FROM customer WHERE id_customer = '$id'")->result(),
            'content'       => 'edit'
        ];

        $this->load->view('../../layouts_admin/main', $data);
    }

    public function updateCustomer()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->editCustomer();
        } else {
            $id             = $this->input->post('id_customer');
            $nama           = $this->input->post('nama');
            $username       = $this->input->post('username');
            $alamat         = $this->input->post('alamat');
            $gender         = $this->input->post('gender');
            $no_telepon     = $this->input->post('no_telepon');
            $no_ktp         = $this->input->post('no_ktp');
            $password       = $this->input->post('password');

            $data = array(
                'nama'          => $nama,
                'username'      => $username,
                'alamat'        => $alamat,
                'gender'        => $gender,
                'no_telepon'    => $no_telepon,
                'no_ktp'        => $no_ktp,
                'password'      => $password,
            );

            $where = array('id_customer'  => $id);
            $this->customer->update_data('customer', $data, $where);
            $this->session->set_flashdata('pesan', 'Data Berhasil diupdate');

            redirect('customer');
        }
    }

    public function hapusCustomer($id)
    {
        $where = array('id_customer'  => $id);
        $this->customer->delete_data($where, 'customer');
        $this->session->set_flashdata('pesan', 'Data Berhasil dihapus');

        redirect('customer');
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
}
