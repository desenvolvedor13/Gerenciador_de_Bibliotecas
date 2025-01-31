<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\Config;
use Config\Database;

class PessoaModel extends Model
{
    protected $table = 'pessoa';
    protected $primaryKey = 'id';   // Chave primária da tabela
    protected $allowedFields = ['nome', 'cpf', 'data_cadastro', 'tipo_pessoa'];
    protected $useTimestamps = true; // Se a tabela utiliza colunas de timestamp (created_at, updated_at)
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $dateFormat = 'data_cadastro'; // Formato de data

    public function getUser($pessoa_id) {
        
        // Conexão com o banco usando o CodeIgniter
        $db = Database::connect();
        if ($db->connect_error) {
            die('Erro ao conectar: ' . $db->connect_error); die;
        } else {
            $Conectado = 'Conexão bem-sucedida!';
            echo $Conectado;
            $builder = $db->table('pessoa');
            $builder->where('id', $pessoa_id);
            $query = $builder->get();
        } 
        $user = $query->getRowArray();
        if (!$user) {
            log_message('error', "Nenhum usuário encontrado para a pessoa: {$pessoa_id}");
        }
        // O que retorna da consulta.
        //var_dump($user); die;
        return $user;
    
    }
}

