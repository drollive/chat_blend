<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
    public function home()
    {
        $this->load->view('partials/users/main');
        $this->load->view('partials/title-meta');
        $this->load->view('partials/head-css');
        $this->load->view('user/home');
        $this->load->view('partials/users/topbar');
        $this->load->view('partials/users/sidebar');
        $this->load->view('user/scripts/home-scripts');
    }

    public function chats()
    {
        $this->load->view('partials/users/main');
        $this->load->view('partials/title-meta');
        $this->load->view('partials/head-css');
        $this->load->view('user/chats');
        $this->load->view('partials/users/topbar');
        $this->load->view('partials/users/sidebar');
        $this->load->view('user/scripts/home-scripts');
    }

}
