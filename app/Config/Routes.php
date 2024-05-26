<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/blogpost/(:num)', 'BlogPost::index/$1');

$routes->get('/admin', 'Admin::index', ['filter' => 'auth']);

$routes->get('/login', 'Auth::index');
$routes->get('/logout', 'Auth::logout');
$routes->post('/login', 'Auth::login'); // Handle the form submission
