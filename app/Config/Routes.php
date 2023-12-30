<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// app/Config/Routes.php

// app/Config/Routes.php

$routes->setAutoRoute(true);
// $routes->post('logi', 'AuthController::login');
// $routes->get('login', 'AuthController::login');


// $routes->resource('kehadiran', ['controller' => 'kehadirancontroller']);
// $routes->match(['post', 'options'], 'insert-kehadiran', 'kehadirancontroller::create');
// $routes->match(['get', 'options'], 'insert-kehadiran', 'kehadirancontroller::create');
// $routes->match(['delete', 'options'], 'delete-kehadiran/(:num)', 'kehadirancontroller::delete/$1');
// $routes->match(['get', 'options'], 'update-kehadiran/(:segment)', 'kehadirancontroller::update/$1');
// $routes->match(['post', 'options'], 'update-kehadiran/(:segment)', 'kehadirancontroller::update/$1');



$routes->resource('contoh');
$routes->resource('pegawai');
$routes->resource('jabatan');
$routes->resource('akses');
$routes->resource('potongan');
