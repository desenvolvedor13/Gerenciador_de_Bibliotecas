<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class InicioController extends Controller
{
    public function index()
    {
        log_message('info', 'Role na sessão: ' . session()->get('role'));

        // Obtém o role do usuário logado
        $role = session()->get('role');

        // Passa a variável para a view
        return view('inicio/index', ['role' => $role]);
    }
    public function getLogoUrl()
    {
        // Caminho completo para a logo, considerando a pasta public
        $logoUrl = base_url('assets/imagens/logo.png');
        
        // Retorna o caminho da logo em formato JSON
        return $this->response->setJSON(['logo_url' => $logoUrl]);
    }
}



