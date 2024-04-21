<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auths extends CI_Controller
{
    public function signin()
    {

        $this->load->view('partials/main');
        $this->load->view('partials/title-meta');
        $this->load->view('partials/head-css');
        $this->load->view('access/signin');
        $this->load->view('access/scripts/signin-scripts');
    }

    public function signup()
    {
        $this->load->view('partials/main');
        $this->load->view('partials/title-meta');
        $this->load->view('partials/head-css');
        $this->load->view('access/signup');
        $this->load->view('partials/vendor-scripts');
        $this->load->view('access/scripts/signup-scripts');
    }

    //Controller for databases
    public function create()
    {
        $this->load->model('user');
        $result = $this->user->validate();

        if ($result == "valid") {
            $user = array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'email_address' => $this->input->post('email_address'),
                'language'  => $this->input->post('language'),
                'password' => md5($this->input->post('password'))
            );

            $result = $this->user->add_user($user);
            if ($result) {
                $this->session->set_flashdata('success', "Account created successfully!");
                redirect('/signin');
            }
        } else {
            $errors = validation_errors();
            $this->session->set_flashdata('error', $errors);
            redirect('/signup');
        }
    }

    public function login()
    {
        $user = array(
            'email_address' => $this->input->post('email_address'),
            'password' => $this->input->post('password')
        );

        $this->load->model('user');
        $result = $this->user->get_user_by_id($user);

        if ($result) {

            $this->load->library('session');

            // Set session data
            $userdata = array(
                'user_id' => $result['id'],
                'email_address' => $result['email_address'],
                'first_name' => $result['first_name'],
                'last_name' => $result ['last_name'],
                'language' => $result['language'],
                'profile_picture' => $result['profile_picture'],
                'logged_in' => TRUE
            );
            $this->session->set_userdata($userdata);
            redirect('users/home');
        } else {
            $this->session->set_flashdata('error', "Invalid credentials.");
            redirect('signin');
        }
    }

    public function logoff()
    {
        $this->load->library('session');
        $this->session->sess_destroy(); // Unset all session data

        redirect('/'); // Redirect to the login page
    }


}
