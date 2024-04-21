<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homes extends CI_Controller {

	public function index()
	{
        if ($this->session->userdata('logged_in')) 
        {
            redirect('users/home');
        } 
        
        $this->load->view('partials/main');
        $this->load->view('partials/title-meta');
        $this->load->view('partials/head-css');
        $this->load->view('home/landing');
        $this->load->view('home/scripts/customer-scripts');
        $this->load->view('partials/vendor-scripts');
        
	}

}
