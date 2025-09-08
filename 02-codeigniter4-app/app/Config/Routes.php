<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('Hello', 'Dosen::index');
$routes->get('mahasiswa', 'Mahasiswa::display');
