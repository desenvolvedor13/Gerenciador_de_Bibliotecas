<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
namespace App\Models;

use CodeIgniter\Model;

class UsuariosModel extends Model
{
    protected $table = 'usuarios';  // Nome da tabela no banco
    protected $primaryKey = 'id';   // Chave primária da tabela
    protected $allowedFields = ['pessoa_id', 'turma', 'endereco_id'];  // Campos permitidos para inserção/atualização
    protected $useTimestamps = true; // Se a tabela utiliza colunas de timestamp (created_at, updated_at)
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $useSoftDeletes = false; // Se você deseja usar soft deletes
    protected $dateFormat = 'datetime'; // Formato de data

    
}

