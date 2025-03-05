<?php

namespace App\Controllers;

use App\Models\ContactModel;

class Contact extends BaseController
{
    public function index(): string
    {
        echo view('templates/header');
        echo view('pages/contactus');
        echo view('templates/footer');
        return '';
    }
	
	public function do_contact()
    {
        $ContactModel = new ContactModel();

        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $phone = $this->request->getPost('phone');
        
        
        $data = [
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            ];

        $r = $ContactModel->insert($data);

        if ($r) {
            echo view('templates/header');
            echo "Thank you keep in touch with us";
            echo view('templates/footer');
        } else {
            echo view('templates/header');
            echo "There was a error during submission. Please try again later";
            echo view('templates/footer');
        }

        return '';
    }

	
}
	
