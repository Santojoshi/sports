<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->match(['get','post'], 'add-product', 'Home::add_product');
$routes->post('upload_product', 'Home::upload_product');
$routes->post('add_category', 'Home::add_category');
$routes->post('add_sub_category', 'Home::add_sub_category');
$routes->match(['get','post'], 'view-product', 'Home::view_product');

$routes->get('edit-product/(:num)', 'Home::edit_product/$1');
$routes->post('edit-product', 'Home::edit_product');

$routes->get('del_product/(:num)', 'Home::delete_product/$1');
$routes->get('del_category/(:num)', 'Home::delete_category/$1');
$routes->get('del_sub_category/(:num)', 'Home::delete_sub_category/$1');

$routes->match(['get', 'post'], 'update_category/(:num)', 'Home::update_category/$1');
$routes->post('update_category', 'Home::update_category');
$routes->match(['get', 'post'], 'update_sub_category/(:num)', 'Home::update_sub_category/$1');
$routes->post('update_sub_category', 'Home::update_sub_category');
$routes->get('update_product/(:num)', 'Home::update_product/$1');