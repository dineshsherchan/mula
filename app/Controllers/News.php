<?php

namespace App\Controllers;

use App\Models\UserModel;

class News extends BaseController 
{
    public function index()
    {
        $model = model(UserModel::class);

        $data = [
            'users_list' => $model->getusers(),
            'title'     => 'users archive',
        ];


        return view('templates/header', $data)
            . view('news/index')
            . view('templates/footer');
    }

    public function show(?string $slug = null)
    {
        $model = model(UserModel::class);

        $data['users'] = $model->getusers($slug);

        if ($data['users'] === null) {
            throw new PageNotFoundException('Cannot find the users item: ' . $slug);
        }

        $data['title'] = $data['users']['title'];

    }

  
  public function create()
    {
        helper('form');

      
            $userData = array( 
                'name' => strip_tags($this->request->getPost('name')), 
                'email' => strip_tags($this->request->getPost('email')), 
                'password' => md5($this->request->getPost('password')), 
            ); 
            

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($userData, [
            'name' => 'required|min_length[3]',
            'email'  => 'required|min_length[3]',
            'password'  => 'required|min_length[3]',
        ])) {
            // The validation fails, so returns the form.
            return $this->new();
        }
         // Gets the validated data.
         $post = $this->validator->getValidated();

         $model = model(UserModel::class);
         
        //validate form input
        if ($post){

            $model->save([
                'name' => $userData['name'],
                'email'  => $userData['email'],
                'password'  => $userData['password'], 
                
            ]);
            
            return view('templates/header', ['title' => 'successfully create'])
            . view('news/success')
            . view('templates/footer');
        }else{

            return view('templates/header', ['title' => 'Something went wrong'])
            . view('news/create')
            . view('templates/footer');
        }

    }
    public function new()
    {
        helper('form');

        return view('templates/header', ['title' => 'Create a users item'])
            . view('news/create')
            . view('templates/footer');
    }
}