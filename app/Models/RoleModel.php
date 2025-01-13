<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\Config;
use Config\Database;


class RoleModel extends Model
{
    protected $table = 'roles';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name'];
    protected $useTimestamps = false;
    
    /**
     * Busca o papel (role) pelo role_id.
     *
     * @param int $role_id
     * @return array|null
     */
    public function getRole($role_id)
    {
        // Instância do modelo de roles
        $roleModel = new \App\Models\RoleModel();
        
        log_message('info', "Buscando role pelo role_id: {$role_id}");
        // Consulta ao banco de dados
        $role = $roleModel->find($role_id);
        
        // Verificação do resultado
        if ($role) {
            log_message('info', "Role encontrado: " . json_encode($role));
        } else {
            log_message('error', "Nenhum role encontrado para o role_id: {$role_id}");
        }

        return $role;
    }

}

