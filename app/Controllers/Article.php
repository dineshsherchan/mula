<?php

namespace App\Controllers;

class Article extends BaseController
{
    public function index()
    {

       

       return view('templates/header')
       . view('pages/article')
       . view('templates/footer');
    }
    
}