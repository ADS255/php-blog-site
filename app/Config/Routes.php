<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/blogpost/(:num)', 'BlogPost::index/$1');

$routes->group('admin', ['filter' => 'auth'], function($routes) {
    $routes->get('/', 'Admin::index');
    $routes->get('createpost', 'Admin::createPost');

    $routes->post('storepost', 'Admin::storePost');
    $routes->post('deletepost/(:num)', 'Admin::deletePost/$1');
});

$routes->get('/login', 'Auth::index');
$routes->post('/login', 'Auth::login');
$routes->get('/logout', 'Auth::logout');
