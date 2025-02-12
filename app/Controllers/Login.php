<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    public function index(): string
    {
        echo view('templates/header');
        echo view('pages/login');
        echo view('templates/footer');
        return '';
    }
        // Login Form
    public function index() {
        // Check if the user is already logged in
        if ($this->session->userdata('user_id')) {
            redirect('home'); // Redirect to home if already logged in
        }
        
        $this->load->view('login');
    }

    // Handle Login Action
    public function do_login() {
        // Get the posted email and password
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        // Call a model function to validate the credentials
        $user = $this->User_model->validate_user($email, $password);

        if ($user) {
            // Set session data to track login status
            $this->session->set_userdata('user_id', $user->id);
            redirect('home'); // Redirect to home page after successful login
        } else {
            // Handle login failure
            $this->session->set_flashdata('error', 'Invalid email or password.');
            redirect('login');
        }
    }

    // Logout User
    public function logout() {
        // Destroy session data to log the user out
        $this->session->sess_destroy();
        redirect('login'); // Redirect to login page after logout
    }
 }

}
