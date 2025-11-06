<?php

use CodeIgniter\Router\RouteCollection;


header("Location: https://megaluz.mx/");
exit;
/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/products', 'Products::index');
$routes->get('/product/(:num)', 'Product::index/$1');
$routes->get('/stores', 'Stores::index');


$routes->get('/contact', 'Contact::index');
$routes->post('/contact/email', 'SendEmail::submit');
$routes->get('sitemap.xml', 'Sitemap::index');


// Download catalogs
$routes->get('pdf/iluminacion-led', 'Catalogs::iluminacionLed');
$routes->get('pdf/ventiladores-de-techo', 'Catalogs::ventiladoresDeTecho');
$routes->get('pdf/candiles', 'Catalogs::candiles');
$routes->get('pdf/christmas', 'Catalogs::christmas');

// API
$routes->resource('api/products', ['controller' => 'ProductsApi']);
