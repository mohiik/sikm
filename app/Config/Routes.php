<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Auth::index');
$routes->get('/input_sertifikat', 'Input::index');
$routes->get('/skmku', 'Pages::skmku'); //misal
$routes->get('/pkl', 'Pages::pkl');
$routes->get('/logout', 'Auth::index');

//KHUSUS UNTUK HALAMAN ADMIN
$routes->get('/admin', 'Admin::index');
$routes->get('/admin/(:segment)', 'Admin::$1');
$routes->get('/admin/detail_serifikat/(:segment)', 'Admin::detail_sertifikat');
// $routes->get('/pemesanan1', 'Pemesanan1::index', ['filter' => 'auth']);
// $routes->get('/Pemesanan1', 'Pemesanan1::index', ['filter' => 'auth']);
// $routes->get('/biodata', 'Biodata::index', ['filter' => 'auth']);
// $routes->get('/Biodata', 'Biodata::index', ['filter' => 'auth']);
// $routes->get('/biodata/(:segment)', 'Biodata::$1', ['filter' => 'auth']);
// $routes->get('/Biodata/(:segment)', 'Biodata::$1', ['filter' => 'auth']);
// $routes->get('/pemesanan1/(:segment)', 'Pemesanan1::$1', ['filter' => 'auth']);
// $routes->get('/Pemesanan1/(:segment)', 'Pemesanan1::$1', ['filter' => 'auth']);


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
