<?php 

class Dashboard extends CI_Controller
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'content' => 'index'
        ];

        $this->load->view('../../layouts_admin/main', $data);
    }
}

?>