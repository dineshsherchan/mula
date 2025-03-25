<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\User;
use App\Controllers\Pages;
use App\Controllers\Gadgets;
use App\Controllers\Ajax;
use App\Controllers\Login;
use App\Controllers\Register;
use App\Controllers\Contact;
use App\Controllers\Laptop;
use App\Controllers\Mobile;
use App\Controllers\Terms;
use App\Controllers\Map;
use App\Controllers\Apis;
use App\Controllers\Article;
use App\Controllers\News;
use App\Controllers\UserController;

$routes->get('/', 'Home::index');

// Login routes
$routes->get('login', [Login::class, 'index']);
$routes->post('login/do_login', [Login::class, 'do_login']);

// Registration routes
$routes->get('registration', [Register::class, 'index']);
$routes->post('registration/do_register', [Register::class, 'do_register']);

// Contact routes
$routes->get('contactus', [Contact::class, 'index']);
$routes->post('contactus/do_contact', [Contact::class, 'do_contact']);

//Laptop routes
$routes->get('laptop', [Laptop::class, 'index']); 

//Mobile routes
$routes->get('mobile', [Mobile::class, 'index']); 
 

//Gadgets routes
$routes->get('gadgets', [Gadgets::class, 'index']); 

//Users routes
$routes->get('article', [Article::class, 'index']);

//search routes
$routes->get('index', [UserController::class, 'index']);
$routes->post('index/getUsers', [UserController::class, 'getUsers']);



//Map routes
$routes->get('geolocation', [Map::class, 'index']); 

//Terms routes
$routes->get('terms', [Terms::class, 'index']);

//Api Routes
$routes->get('gif', [Apis::class, 'index']);
$routes->post('gif/search', [Apis::class, 'search']); 

// Ajax routes
$routes->get('ajaxnews', [Ajax::class, 'index']);
$routes->get('ajaxnews/(:segment)', [Ajax::class, 'index']);
$routes->post('ajaxnews', [Ajax::class, 'index']);


// News Routes
$routes->get('news', [News::class, 'index']); 
$routes->get('news/new', [News::class, 'new']); 
$routes->post('news', [News::class, 'create']); 
$routes->post('news/new', [News::class, 'create']);
$routes->get('news/(:segment)', [News::class, 'show']); 

// Pages Routes
$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);



