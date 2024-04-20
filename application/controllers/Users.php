<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
    public function home()
    {
        if ($this->session->userdata('logged_in')) {
            $this->load->view('partials/users/main');
            $this->load->view('partials/title-meta');
            $this->load->view('partials/head-css');
            $this->load->view('user/home');
            $this->load->view('partials/users/topbar');
            $this->load->view('partials/users/sidebar');
            $this->load->view('user/scripts/home-scripts');
            $this->load->view('partials/footer');
        } else {
            redirect('signin');
        }
    }

    public function chats()
    {
        if ($this->session->userdata('logged_in')) {
            $this->load->view('partials/users/main');
            $this->load->view('partials/title-meta');
            $this->load->view('partials/head-css');
            $this->load->view('user/chats');
            $this->load->view('partials/users/topbar');
            $this->load->view('partials/users/sidebar');
            $this->load->view('user/scripts/home-scripts');
            $this->load->view('partials/footer');
        } else {
            redirect('signin');
        }
    }

    public function faq()
    {
        if ($this->session->userdata('logged_in')) {
            $this->load->view('partials/users/main');
            $this->load->view('partials/title-meta');
            $this->load->view('partials/head-css');
            $this->load->view('user/faq');
            $this->load->view('partials/users/topbar');
            $this->load->view('partials/users/sidebar');
            $this->load->view('user/scripts/home-scripts');
            $this->load->view('partials/footer');
        } else {
            redirect('signin');
        }
    }

    public function profile()
    {
        if ($this->session->userdata('logged_in')) {
            $this->load->view('partials/users/main');
            $this->load->view('partials/title-meta');
            $this->load->view('partials/head-css');
            $this->load->view('user/profile');
            $this->load->view('partials/users/topbar');
            $this->load->view('partials/users/sidebar');
            $this->load->view('user/scripts/home-scripts');
            $this->load->view('partials/footer');
        } else {
            redirect('signin');
        }
    }

    public function profile_settings()
    {
        if ($this->session->userdata('logged_in')) {
            $this->load->view('partials/users/main');
            $this->load->view('partials/title-meta');
            $this->load->view('partials/head-css');
            $this->load->view('user/profile_settings');
            $this->load->view('partials/users/topbar');
            $this->load->view('partials/users/sidebar');
            $this->load->view('user/scripts/home-scripts');
            $this->load->view('partials/footer');
        } else {
            redirect('signin');
        }
    }

    public function blogs()
    {
        if ($this->session->userdata('logged_in')) {
            $this->load->view('partials/users/main');
            $this->load->view('partials/title-meta');
            $this->load->view('partials/head-css');
            $this->load->view('user/blogs');
            $this->load->view('partials/users/topbar');
            $this->load->view('partials/users/sidebar');
            $this->load->view('user/scripts/home-scripts');
            $this->load->view('partials/footer');
        } else {
            redirect('signin');
        }
    }

    public function logoff()
    {
        $this->load->library('session');
        $this->session->sess_destroy();

        redirect('/'); 
    }


}
