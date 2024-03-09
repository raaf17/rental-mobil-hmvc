<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tipe extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Tipe_model', 'tipe');
    }

    public function index()
    {
        $data = [
            'title'         => 'Data Tipe',
            'data_tipe'     => $this->tipe->get_data('tipe')->result(),
            'content'       => 'index'
        ];

        $this->load->view('../../layouts_admin/main', $data);
    }

    public function tambahTipe()
    {
        $data = [
            'title'         => 'Tambah Data Tipe',
            'data_tipe'     => $this->tipe->get_data('tipe')->result(),
            'content'       => 'add'
        ];

        $this->load->view('../../layouts_admin/main', $data);
    }

    public function createTipe()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambahTipe();
        } else {
            $kode_tipe      = $this->input->post('kode_tipe');
            $nama_tipe      = $this->input->post('nama_tipe');

            $data = array(
                'kode_tipe'     => $kode_tipe,
                'nama_tipe'     => $nama_tipe,
            );

            $this->tipe->insert_data($data, 'tipe');
            $this->session->set_flashdata('pesan', 'Data Berhasil ditambahkan');

            redirect('tipe');
        }
    }

    public function editTipe($id)
    {
        $where = array('id_tipe' => $id);
        $data = [
            'title'         => 'Edit Data Tipe',
            'tipe'          => $this->db->query("SELECT * FROM tipe WHERE id_tipe='$id'")->result(),
            'content'       => 'edit'
        ];

        $this->load->view('../../layouts_admin/main', $data);
    }

    public function updateTipe()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->editTipe();
        } else {
            $id             = $this->input->post('id_tipe');
            $kode_tipe      = $this->input->post('kode_tipe');
            $nama_tipe      = $this->input->post('nama_tipe');

            $data = array(
                'kode_tipe'     => $kode_tipe,
                'nama_tipe'     => $nama_tipe,
            );

            $where = array('id_tipe' => $id);
            $this->tipe->update_data('tipe', $data, $where);
            $this->session->set_flashdata('pesan', 'Data Berhasil diupdate');

            redirect('tipe');
        }
    }

    public function hapusTipe($id)
    {
        $where = array('id_tipe' => $id);
        $this->tipe->delete_data($where, 'tipe');
        $this->session->set_flashdata('pesan', 'Data Berhasil dihapus');

        redirect('tipe');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('kode_tipe', 'Kode Tipe', 'required');
        $this->form_validation->set_rules('nama_tipe', 'Nama Tipe', 'required');
    }
}
