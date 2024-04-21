<?php

class User extends CI_Model 
{
    function get_user_by_id($user)
    {
        $query = "SELECT * FROM users WHERE email_address = ? AND password = ?";
        $values = array($user['email_address'], md5($user['password']));
        $result = $this->db->query($query, $values);
        if ($result->num_rows() == 1) {
            return $result->row_array(); // Return user data as an array
        } else {
            return false; // Return false if user not found or multiple users found
        }
    }

    function add_user($user)
    {
        $query = "INSERT INTO users(first_name, last_name, email_address, language, password, created_at, updated_at) VALUES(?, ?, ?, ?, ?, NOW(), NOW())";
        $values = array($user['first_name'],$user['last_name'], $user['email_address'], $user['language'], $user['password']);
        return $this->db->query($query, $values);
    }

    function validate()
    {
        $this->load->library('form_validation');

        // Set validation rules
        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        $this->form_validation->set_rules('email_address', 'Email_Address', 'required|is_unique[users.email_address]');
        $this->form_validation->set_rules('language', 'language', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');

        if ($this->form_validation->run()) {
            return "valid";
        } else {
            return array(validation_errors());
        }
    }

    public function update_profile($user_id, $filename)
    {
        $query = "UPDATE users SET profile_picture = ? WHERE id = ?"; // Renamed column
        $values = array($filename, $user_id);
        // Success/failure based on execution, not just an object
        return $this->db->query($query, $values) ? true : false;
    }

}