<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

// app/Models/InstituicaoModel.php
namespace App\Models;

use CodeIgniter\Model;

class InstituicaoModel extends Model
{
    protected $table = 'instituicoes';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nome', 'cnpj'];
    protected $useTimestamps = false;  // Não estamos usando timestamps aqui
}
