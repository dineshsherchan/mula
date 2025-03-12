<?php

namespace App\Controllers;

class Map extends BaseController
{
    public function index(): string
    {
		echo view('templates/header');
        echo view('map/geolocation');
		echo view('templates/footer');
		return '';
    }
}
