<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\News;
use App\Controllers\Pages;
use App\Controllers\Ajax;



$routes->get('/', 'Home::index');
$routes->get('pages', [Pages::class, 'index']);
$routes->get('news', [News::class, 'index']); 
$routes->get('news/new', [News::class, 'new']); 
$routes->post('news', [News::class, 'create']); 
$routes->get('ajaxnews', [Ajax::class, 'index']);
$routes->get('ajaxnews/(:segment)', [Ajax::class, 'index']);
$routes->post('ajaxnews', [Ajax::class, 'index']); 

$routes->get('news/(:segment)', [News::class, 'show']); 
$routes->get('(:segment)', [Pages::class, 'view']);