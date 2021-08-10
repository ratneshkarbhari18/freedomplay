<?php

namespace Config;

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
$routes->setDefaultController('PageLoader');
$routes->setDefaultMethod('home');
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
$routes->get('/', 'PageLoader::home');
$routes->get('admin-login', 'PageLoader::admin_login');
$routes->get("dashboard","PageLoader::dashboard");
$routes->get("home-page-mgt","PageLoader::homepage_mgt");
$routes->get("about-page-mgt","PageLoader::aboutpage_mgt");
$routes->get("contact-page-mgt","PageLoader::contactpage_mgt");
// $routes->get("faqs-mgt","PageLoader::faqs_mgt");

$routes->post("admin-login-exe","Authentication::admin_login");
$routes->post("add-new-header-image-exe","HeaderImages::create");
$routes->post("delete-header-image-exe","HeaderImages::delete");

$routes->post("add-new-faq-exe","Faqs::create");
$routes->post("delete-faq-exe","Faqs::delete");

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
