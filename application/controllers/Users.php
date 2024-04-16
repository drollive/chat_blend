<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
    public function home()
    {
        $this->load->view('partials/main');
        $this->load->view('partials/title-meta');
        $this->load->view('partials/head-css');
        $this->load->view('user/home');
        $this->load->view('partials/topbar');
        $this->load->view('partials/sidebar');
        $this->load->view('partials/vendor-scripts');
    }

  
}
