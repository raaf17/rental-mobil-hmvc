<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mobil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Mobil_model', 'mobil');
        $this->load->model('Tipe_model', 'tipe');
    }

    public function index()
    {
        $data = [
            'title'         => 'Data Mobil',
            'data_mobil'    => $this->mobil->get_data('mobil')->result(),
            'data_tipe'     => $this->tipe->get_data('tipe')->result(),
            'content'       => 'index'
        ];

        $this->load->view('../../layouts_admin/main', $data);
    }

    public function tambahMobil()
    {
        $data = [
            'title'         => 'Tambah Data Mobil',
            'data_mobil'    => $this->mobil->get_data('mobil')->result(),
            'data_tipe'     => $this->tipe->get_data('tipe')->result(),
            'content'       => 'add'
        ];

        $this->load->view('../../layouts_admin/main', $data);
    }

    public function createMobil()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambahMobil();
        } else {
            $kode_tipe      = $this->input->post('kode_tipe');
            $merk           = $this->input->post('merk');
            $no_plat        = $this->input->post('no_plat');
            $warna          = $this->input->post('warna');
            $tahun          = $this->input->post('tahun');
            $status         = $this->input->post('status');
            $gambar         = $_FILES['gambar']['name'];

            if ($gambar = '') {
            } else {
                $config['upload_path'] = './assets/upload';
                $config['allowed_types'] = 'jpg|jpeg|png|tiff';
                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('gambar')) {
                    echo "Gambar Mobil Gagal diupload";
                } else {
                    $gambar = $this->upload->data('file_name');
                }
            }

            $data = array(
                'kode_tipe' => $kode_tipe,
                'merk'      => $merk,
                'no_plat'   => $no_plat,
                'warna'     => $warna,
                'tahun'     => $tahun,
                'status'    => $status,
                'gambar'    => $gambar,
            );

            $this->mobil->insert_data($data, 'mobil');
            $this->session->set_flashdata('pesan', 'Data Berhasil ditambahkan');

            redirect('mobil');
        }
    }

    public function editMobil($id)
    {
        $where = array('id_mobil' => $id);
        $data = [
            'title'         => 'Edit Data Mobil',
            'mobil'         => $this->db->query("SELECT * FROM mobil mb, tipe tp WHERE mb.kode_tipe=tp.kode_tipe AND mb.id_mobil = '$id'")->result(),
            'tipe'          => $this->tipe->get_data('tipe')->result(),
            'content'       => 'edit'
        ];

        $this->load->view('../../layouts_admin/main', $data);
    }

    public function updateMobil()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->editMobil();
        } else {
            $id             = $this->input->post('id_mobil');
            $kode_tipe      = $this->input->post('kode_tipe');
            $merk           = $this->input->post('merk');
            $no_plat        = $this->input->post('no_plat');
            $warna          = $this->input->post('warna');
            $tahun          = $this->input->post('tahun');
            $status         = $this->input->post('status');
            $gambar         = $_FILES['gambar']['name'];

            if ($gambar) {
                $config['upload_path'] = './assets/upload';
                $config['allowed_types'] = 'jpg|jpeg|png|tiff';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('gambar')) {
                    $gambar = $this->upload->data('file_name');
                    $this->db->set('gambar', $gambar);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $data = array(
                'kode_tipe' => $kode_tipe,
                'merk'      => $merk,
                'no_plat'   => $no_plat,
                'warna'     => $warna,
                'tahun'     => $tahun,
                'status'    => $status,
            );

            $where = array('id_mobil'  => $id);
            $this->mobil->update_data('mobil', $data, $where);
            $this->session->set_flashdata('pesan', 'Data Berhasil diupdate');

            redirect('mobil');
        }
    }

    public function detailMobil($id)
    {
        $data = [
            'title'         => 'Detail Mobil',
            'detail'        => $this->mobil->ambil_id_mobil($id),
            'content'       => 'detail'
        ];

        $this->load->view('../../layouts_admin/main', $data);
    }

    public function hapusMobil($id)
    {
        $where = array('id_mobil'  => $id);
        $this->mobil->delete_data($where, 'mobil');
        $this->session->set_flashdata('pesan', 'Data Berhasil dihapus');

        redirect('mobil');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('kode_tipe', 'Kode Tipe', 'required');
        $this->form_validation->set_rules('merk', 'Merk', 'required');
        $this->form_validation->set_rules('no_plat', 'No. Plat', 'required');
        $this->form_validation->set_rules('tahun', 'Tahun', 'required');
        $this->form_validation->set_rules('warna', 'Warna', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
    }
}
