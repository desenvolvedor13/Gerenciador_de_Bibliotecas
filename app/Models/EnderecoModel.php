<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

// app/Models/EnderecoModel.php
namespace App\Models;

use CodeIgniter\Model;

class EnderecoModel extends Model
{
    protected $table = 'enderecos';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_pessoa', 'logradouro', 'numero', 'bairro', 'cidade', 'cep'];
    protected $useTimestamps = false;  // Não estamos usando timestamps aqui
}
