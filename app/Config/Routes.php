<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
 $routes->get('auth', 'Auth::index');
 $routes->post('auth/login', 'Auth::login');
 $routes->get('auth/logout', 'Auth::logout');
 $routes->get('auth/callback', 'Auth::callback');
 $routes->get('auth/forbidden', 'Auth::forbidden');

 $routes->get('/', 'Home::index',['filter' => 'auth']);
 $routes->get('home', 'Home::index',['filter' => 'auth']);

 $routes->get('presensi', 'Presensi::index',['filter' => 'auth']);
 $routes->post('presensi/checkin', 'Presensi::checkin',['filter' => 'auth']);
