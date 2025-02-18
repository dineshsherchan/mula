<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\News;
use App\Controllers\Pages;
use App\Controllers\Ajax;
use App\Controllers\Login;
use App\Controllers\Register;
use App\Controllers\Contact;


$routes->get('/', 'Home::index');


// News Routes
$routes->get('news', [News::class, 'index']); 
$routes->get('news/new', [News::class, 'new']); 
$routes->post('news', [News::class, 'create']); 
$routes->get('news/(:segment)', [News::class, 'show']); 


// Pages Routes
$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);

// Login routes
$routes->get('login', [Login::class, 'index']);
$routes->post('login/do_login', [Login::class, 'do_login']);

// Registration routes
$routes->get('registration', [Register::class, 'index']);
$routes->post('registration/do_register', [Register::class, 'do_register']);

// Contact routes
$routes->get('contactus', [Contact::class, 'index']);
$routes->post('contactus/do_contact', [Contact::class, 'do_contact']);

// Ajax routes
$routes->get('ajaxnews', [Ajax::class, 'index']);
$routes->get('ajaxnews/(:segment)', [Ajax::class, 'index']);
$routes->post('ajaxnews', [Ajax::class, 'index']); 

