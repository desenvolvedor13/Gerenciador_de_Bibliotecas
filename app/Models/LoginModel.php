<?php

// app/Models/LoginModel.php
namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = 'logins';
    protected $primaryKey = 'id';
    protected $allowedFields = ['pessoa_id', 'email', 'senha', 'role_id'];
    protected $useTimestamps = true;  // Se a tabela usa timestamps
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    /**
     * Busca usuário pelo email.
     *
     * @param string $email
     * @return array|null
     */
    public function getUserByEmail($email)
    {
        $builder = $this->db->table($this->table);
        $builder->where('email', $email);
        $query = $builder->get();

        log_message('info', "Tentando buscar usuário com email: {$email}");
        $user = $query->getRowArray();

        log_message('debug', 'Consulta SQL: ' . $this->getLastQuery());
        log_message('debug', 'Resultado: ' . json_encode($user));

        if (!$user) {
            log_message('error', "Nenhum usuário encontrado para o email: {$email}");
        }

        return $user;
    }

    /**
     * Criptografa a senha antes de salvar.
     *
     * @param string $senha
     * @return string
     */
    public function hashPassword($senha)
    {
        return password_hash($senha, PASSWORD_BCRYPT);  // Usando Bcrypt para segurança
    }

    /**
     * Verifica se a senha fornecida é válida.
     *
     * @param string $senha
     * @param string $hashedPassword
     * @return bool
     */
    public function verifyPassword($senha, $hashedPassword)
    {
        return password_verify($senha, $hashedPassword);
    }
}
