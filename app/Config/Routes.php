<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/products', 'Products::index');
$routes->get('/product/(:num)', 'Product::index/$1');


$routes->get('/contact', 'Contact::index');
$routes->post('/contact/email', 'SendEmail::submit');
$routes->get('sitemap.xml', 'Sitemap::index');
