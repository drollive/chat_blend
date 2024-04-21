<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
    public function home()
    {
        if ($this->session->userdata('logged_in')) 
        {
            $this->load->view('partials/users/main');
            $this->load->view('partials/title-meta');
            $this->load->view('partials/head-css');
            $this->load->view('partials/customizer');
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
        if ($this->session->userdata('logged_in')) 
        {
            $this->load->view('partials/users/main');
            $this->load->view('partials/title-meta');
            $this->load->view('partials/head-css');
            $this->load->view('partials/customizer');
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
        if ($this->session->userdata('logged_in')) 
        {
            $this->load->view('partials/users/main');
            $this->load->view('partials/title-meta');
            $this->load->view('partials/head-css');
            $this->load->view('partials/customizer');
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
        if ($this->session->userdata('logged_in')) 
        {
            $this->load->view('partials/users/main');
            $this->load->view('partials/title-meta');
            $this->load->view('partials/head-css');
            $this->load->view('partials/customizer');
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
        if ($this->session->userdata('logged_in'))
        {
            $this->load->view('partials/users/main');
            $this->load->view('partials/title-meta');
            $this->load->view('partials/head-css');
            $this->load->view('partials/customizer');
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
        if ($this->session->userdata('logged_in')) 
        {
            $this->load->view('partials/users/main');
            $this->load->view('partials/title-meta');
            $this->load->view('partials/head-css');
            $this->load->view('partials/customizer');
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

    public function upload()
    {
        $config['upload_path'] = './uploads/profile_images/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = 4048;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('profile_image')) {
            // Handle error and display message to the user
            $error = $this->upload->display_errors();
            $this->session->set_flashdata('error_message', $error);
            redirect('users/profile_settings');
        } else {
            $upload_data = $this->upload->data();
            $image_path = base_url("uploads/profile_images/") . $upload_data['file_name'];

            $this->load->model('user');
            $this->user->update_profile($this->session->userdata('user_id'), array('profile_image' => $image_path));

            $existing_userdata = $this->session->userdata(); // Get existing data
            $existing_userdata['profile_picture'] = $image_path; // Update profile_image
            $this->session->set_userdata($existing_userdata); // Overwrite with updated data

            redirect('users/profile_settings');
        }
    }

    public function update()
    {
        $user = array(
            'language'  => $this->input->post('language'),
            'phone' => $this->input->post('phone'),
            'email_address' => $this->input->post('email_address'),
            'city' => $this->input->post('city'),
            'country' => $this->input->post('country'),
            'zipcode' => $this->input->post('zipcode'),
            'description' => $this->input->post('description')
        );

        $this->load->model('user');
        $this->user->update_info($this->session->userdata('user_id'), $user);

        $existing_userdata = $this->session->userdata();
        $existing_userdata['phone'] = $user['phone'];
        $existing_userdata['city'] = $user['city'];
        $existing_userdata['country'] = $user['country'];
        $existing_userdata['zipcode'] = $user['zipcode'];
        $existing_userdata['description'] = $user['description'];

        $this->session->set_userdata($existing_userdata);

        redirect('users/profile_settings');
    }

}
