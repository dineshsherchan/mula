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

    public function do_login()
    {
        $session = session();
        $UserModel = new UserModel();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Attempt to retrieve user from the database
        $result = $UserModel->getUsers($email);

        // Check if the result is valid and contains the necessary fields
        if ($result) {
            // Check if the email exists and if the password is correct
            if (isset($result['email']) && password_verify($password, $result['password'])) {
                
                // Set session data and redirect to the homepage
                $session->set("user_id", $result['id']);
                return redirect()->to(base_url());
            } else {
                // Password doesn't match or invalid credentials
                $session->setFlashdata('error', 'Invalid email or password.');
                return redirect()->route('login');
            }
        } else {
            // User not found
            $session->setFlashdata('error', 'Invalid email or password.');
            return redirect()->route('login');
        }
    }
}
