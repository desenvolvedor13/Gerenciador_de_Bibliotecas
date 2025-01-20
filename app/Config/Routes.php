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
$routes->get('api/get_logo_url', 'ApiController::get_logo_url');
// app/Config/Routes.php
$routes->post('api/cadastro_administrador', 'CadastroController::cadastro_administrador');
$routes->get('/react', 'ReactApp::index');

$routes->group('proprietario', function ($routes) {
    $routes->get('/', 'ProprietarioController::index'); // A rota principal é 'proprietario/'
    $routes->get('adicionar_administrador', 'ProprietarioController::adicionarAdministrador');
    $routes->get('listar_administradores', 'ProprietarioController::listarAdministradores');
    $routes->get('configuracoes', 'ProprietarioController::configuracoes');
});

