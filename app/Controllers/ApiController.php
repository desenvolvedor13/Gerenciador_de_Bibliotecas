<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class ApiController extends ResourceController
{
    public function get_logo_url()
    {
        // Gerar a URL completa da logo
        $logo_url = base_url('assets/imagens/logo.png');

        // Retornar a URL em formato JSON
        return $this->respond(['logo_url' => $logo_url]);
    }
}
