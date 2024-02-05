<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('User');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);


$routes->get('/', 'User::index');

$routes->get('pages/profil', 'Pages::profil');
$routes->get('pages/program_latihan', 'Pages::program_latihan');
$routes->get('pages/panduan_nutrisi', 'Pages::panduan_nutrisi');
$routes->get('pages/lokasi_gym', 'Pages::lokasi_gym');