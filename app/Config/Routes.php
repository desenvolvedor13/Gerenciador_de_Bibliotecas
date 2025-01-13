<?php

use CodeIgniter\Router\RouteCollection;

/**s
 * @var RouteCollection $routes
 */
// Rotas públicas
$routes->get('/', 'AuthController::login'); // Página inicial
$routes->get('login', 'AuthController::login'); // Página de login
$routes->post('/authenticate', 'AuthController::authenticate');
$routes->get('logout', 'AuthController::login');
$routes->get('boas-vindas', 'InicioController::index');
$routes->get('admin/dashboard', 'AdminController::dashboard');

