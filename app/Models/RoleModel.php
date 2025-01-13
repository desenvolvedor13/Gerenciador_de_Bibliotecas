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
        $db = Database::connect();
        if ($db->connect_error) {
            die('Erro ao conectar: ' . $db->connect_error); die;
        } else {
            $Conectado = 'Conexão bem-sucedida!';
            echo $Conectado;
            $builder = $db->table('roles');
            $builder->where('id', $role_id);
            $query = $builder->get();
        } 
        $role = $query->getRowArray();
        if (!$role) {
            log_message('error', "Nenhum usuário encontrado para o role_id: {$role_id}");
        }
        return $role;
    }

}

