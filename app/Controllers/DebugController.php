<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use Config\Services;

class DebugController extends Controller
{
    public function routes()
    {
        $routes = Services::routes();
        echo "<pre>";
        print_r($routes->getRoutes());
        echo "</pre>";
    }
}
