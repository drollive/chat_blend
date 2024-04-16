<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function signin()
    {
        $this->load->view('partials/main');
        $this->load->view('partials/title-meta');
        $this->load->view('partials/head-css');
        $this->load->view('access/signin');
        $this->load->view('partials/vendor-scripts');
    }

    public function signup()
    {
        $this->load->view('partials/main');
        $this->load->view('partials/title-meta');
        $this->load->view('partials/head-css');
        $this->load->view('access/signup');
        $this->load->view('partials/vendor-scripts');
    }




}
