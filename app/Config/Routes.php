<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'CompanyController::index');
$routes->get('list_company', 'CompanyController::index');
$routes->get('create_company', 'CompanyController::create');
$routes->post('save_company', 'CompanyController::save');
$routes->get('delete_company/(:num)', 'CompanyController::delete/$1');
$routes->get('edit_company/(:num)', 'CompanyController::edit/$1');
$routes->post('update_company', 'CompanyController::update');
