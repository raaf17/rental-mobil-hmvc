<?php 

class Auth extends CI_Controller
{
    public function register()
    {
        $data = [
            'title' => 'Register',
            'content' => 'register'
        ];

        $this->load->view('layouts/main', $data);
    }
}

?>