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

        $result = $UserModel->where('email', $email)->first();

        if ($result !== null) {
            if (isset($result['id']) && password_verify($password, $result['password'])) {
                
                $session->set("user_id", $result['id']);
                return redirect()->to(base_url("add"));
            } else {
                
                $session->setFlashdata('error', 'Invalid email or password.');
                return redirect()->back();
            }
        } else {
            
            $session->setFlashdata('error', 'Invalid email or password.');
            return redirect()->back();
        }
    }
}