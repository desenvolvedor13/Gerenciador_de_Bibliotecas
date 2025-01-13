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
}



