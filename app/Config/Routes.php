<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get('/', 'Pages::index');
$routes->get('/About', 'Pages::about');
$routes->get('/about', 'Pages::about');
$routes->get('/Detail', 'Pages::detail');
$routes->get('/detail', 'Pages::detail');
$routes->get('/Login', 'Auth::index');
$routes->get('/login', 'Auth::index');
$routes->get('/Register', 'Auth::register');
$routes->get('/register', 'Auth::register');
$routes->get('/Admin', 'Auth::admin');
$routes->get('/admin', 'Auth::admin');
$routes->get('/detail2', 'Pages::detail2');
$routes->get('/detail3', 'Pages::detail3');
$routes->get('/detail4', 'Pages::detail4');
$routes->get('/detail5', 'Pages::detail5');











/**
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
