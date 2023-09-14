<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'CompanyController::index');
$routes->get('list_company', 'CompanyController::index');
$routes->get('create_company', 'CompanyController::create');
$routes->post('save_company', 'CompanyController::save');
$routes->get('edit_company', 'CompanyController::edit');
$routes->get('delete_company/(:num)', 'CompanyController::delete/$1');
