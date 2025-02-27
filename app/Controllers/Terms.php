<?php

namespace App\Controllers;

class Terms extends BaseController
{
    public function index()
    {

       

       return view('templates/header')
       . view('pages/Terms')
       . view('templates/footer');
    }
    
}