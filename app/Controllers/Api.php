<?php

namespace App\Controllers;

class Api extends BaseController
{
    public function index(): string
    {
		echo view('templates/header');
                echo view('pages/gif');
		echo view('templates/footer');
		return '';
    }
	
	public function search()
    {
        // Retrieve search keyword from the form submission
        $keyword = $this->request->getPost('searchWords');
        $keyword = str_replace(" ", "+", $keyword);

        // Set up the URL for the API request
        $url = "https://api.giphy.com/v1/gifs/search?"
            . "api_key=dAJCSi1gMVjmqbWKy8UqcpS23oGxSPjX"
            . "q=" . $keyword
            . "&limit=50&"
            . "lang=en";

        // Get data from URL
        $json = file_get_contents($url);

        // Convert the JSON data into a PHP object
        $obj = json_decode($json);

        // Pass the data to the view for rendering
        return view('pages/gif', ['obj' => $obj]);
    }
}