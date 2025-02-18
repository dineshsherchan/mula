<?php

namespace App\Controllers;

use App\Models\UserModel;

class Register extends BaseController
{
    public function index(): string
    {
        echo view('templates/header');
        echo view('pages/registration');
        echo view('templates/footer');
        return '';
    }

    public function do_register()
    {
        $UserModel = new UserModel();

        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $mobile = $this->request->getPost('mobile');
        $address = $this->request->getPost('address');
        $dob = $this->request->getPost('dob');

        $password = password_hash($password, PASSWORD_BCRYPT);

        $data = [
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'mobile' => $mobile,
            'address' => $address,
            'dob' => $dob,
        ];

        $r = $UserModel->insert($data);

        if ($r) {
            echo view('templates/header');
            echo "User registered successfully";
            echo view('templates/footer');
        } else {
            echo view('templates/header');
            echo "Error during registration";
            echo view('templates/footer');
        }

        return '';
    }
}