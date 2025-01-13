<?php

if (!function_exists('isLoggedIn')) {
    function isLoggedIn()
    {
        return session()->has('user_id');
    }
}

if (!function_exists('getUserRole')) {
    function getUserRole()
    {
        return session()->get('role');
    }
}

if (!function_exists('redirectToDashboard')) {
    function redirectToDashboard()
    {
        $role = getUserRole();
        switch ($role) {
            case 'admin':
                return redirect()->to(base_url('admin/dashboard'));
            case 'bibliotecario':
                return redirect()->to(base_url('bibliotecario/dashboard'));
            default:
                return redirect()->to(base_url('boas-vindas'));
        }
    }
}
