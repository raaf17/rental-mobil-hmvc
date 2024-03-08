<?php 

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Mobil_model', 'mobil');
    }

    public function index()
    {
        $data = [
            'title' => 'Beranda',
            'mobil' => $this->mobil->get_data('mobil')->result(),
            'content' => 'index'
        ];

        $this->load->view('../../layouts_customer/main', $data);
    }

    public function detailMobil($id)
    {
        $data = [
            'title' => 'Detail Mobil',
            'mobil' => $this->mobil->ambil_id_mobil($id),
            'content' => 'detail'
        ];

        $this->load->view('../../layouts_customer/main', $data);
    }
}

?>