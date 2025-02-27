<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Mobile extends Controller
{
    
    
    public function index()
    {

       

       return view('templates/header')
       . view('pages/mobile')
       . view('templates/footer');
    }
    


}

