<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
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

        $data = $this->request->getPost(['title', 'body']);

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($data, [
            'title' => 'required|max_length[255]|min_length[3]',
            'body'  => 'required|max_length[5000]|min_length[10]',
        ])) {
            // The validation fails, so returns the form.
            return $this->new();
        }
         // Gets the validated data.
         $post = $this->validator->getValidated();

         $model = model(UserModel::class);
 
         $model->save([
             'title' => $post['title'],
             'slug'  => url_title($post['title'], '-', true),
             'body'  => $post['body'],
         ]);
    }
    public function new()
    {
        helper('form');

        return view('templates/header', ['title' => 'Create a users item'])
            . view('news/create')
            . view('templates/footer');
    }
}