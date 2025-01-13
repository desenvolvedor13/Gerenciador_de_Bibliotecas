<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\Config;
use Config\Database;


class LoginModel extends Model
{
    protected $table = 'logins';
    protected $primaryKey = 'id';
    protected $allowedFields = ['pessoa_id', 'email', 'senha', 'role_id'];
    protected $useTimestamps = false;

    /**
     * Busca usuário pelo email.
     *
     * @param string $email
     * @return array|null
     */
    public function getUserByEmail($email)
    {
        $email = trim(strtolower($email));
        
        // Conexão com o banco usando o CodeIgniter
        $db = Database::connect();
        if ($db->connect_error) {
            die('Erro ao conectar: ' . $db->connect_error); die;
        } else {
            $Conectado = 'Conexão bem-sucedida!';
            echo $Conectado;
            $builder = $db->table('logins');
            $builder->where('email', $email);
            $query = $builder->get();
        }  
        
        log_message('info', "Tentando buscar usuário com email: {$email}");
        $user = $query->getRowArray();
        log_message('debug', 'Consulta SQL: ' . $this->getLastQuery());
        log_message('debug', 'Resultado: ' . json_encode($user));

        if (!$user) {
            log_message('error', "Nenhum usuário encontrado para o email: {$email}");
        }
        // O que retorna da consulta.
        //var_dump($user); die;
        return $user;
    }

}

