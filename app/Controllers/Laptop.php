<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Laptop extends Controller
{
   

       public function index()
    {
        return view('templates/header')
        . view('pages/laptop')
        . view('templates/footer');
    }
}

