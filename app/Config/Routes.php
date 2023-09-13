<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'CompanyController::index');
$routes->get('list_company', 'CompanyController::index');
$routes->get('create_company', 'CompanyController::create');
$routes->post('save_company', 'CompanyController::save');
