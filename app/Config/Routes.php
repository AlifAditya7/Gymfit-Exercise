<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('pages/profil', 'Pages::profil');
$routes->get('pages/program_latihan', 'Pages::program_latihan');
$routes->get('pages/panduan_nutrisi', 'Pages::panduan_nutrisi');
$routes->get('pages/lokasi_gym', 'Pages::lokasi_gym');
$routes->get('pages/bmi', 'Pages::bmi');
$routes->get('login', 'Login::index');