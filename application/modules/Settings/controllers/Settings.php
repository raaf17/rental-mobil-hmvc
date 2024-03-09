<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Settings extends CI_Controller
{

    public function index()
    {
        $data = [
            'title'     => 'Settings',
            'content'   => 'index'
        ];

        $this->load->view('../../layouts_admin/main', $data);
    }

    public function profile()
    {
        $data = [
            'title'     => 'Profile',
            'content'   => 'profile'
        ];

        $this->load->view('../../layouts_admin/main', $data);
    }
}

?>