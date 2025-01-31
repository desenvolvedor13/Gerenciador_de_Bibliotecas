<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\LoginModel;
use App\Models\UsuariosModel;
use App\Models\RoleModel;
use \App\Models\PessoaModel;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth/login');
    }
    public function authenticate()
    {
        
        $loginModel = new LoginModel();
        $usuariosModel = new UsuariosModel();
        $roleModel = new RoleModel();
        $pessoaModel = new PessoaModel();
        
        $email = $this->request->getPost('email');
        $senha = $this->request->getPost('senha');

        // Verifica o usuário pelo email
        $login = $loginModel->getUserByEmail($email);
        if (!$login) {            
            echo 'Aqui no if user: ';
            return redirect()->to('login')->with('error', 'Usuário não encontrado.');
        }
        
        // Verifica a senhas de texto simples
        // implementar verificação de senhas seguras password_verify adicionadas no banco pelo password_hash
        if ($senha !== $login['senha']) {
        echo 'Senha inválida! -Trocar metodo de verificação de senha para produção-';
        session()->setFlashdata('error', 'Senha inválida!');
        return redirect()->to('login');
}
       // Busca o role associado
        $role = $roleModel->getRole($login['role_id']);
        
        
       // Busca o pessoa associada ao email pelo id
        $user = $pessoaModel->getUser($login['pessoa_id']);
       // var_dump($user);die;
       
       // Define sessão e redireciona
        session()->set(
            [
                'user_id' => $login['id'],
                'email' => $login['email'],
                'nome' => $user['nome'],
                'role' => $role['name'] ?? 'Desconhecido'
        ]);
        var_dump($role);
        // Redireciona com base na permissão
    switch ($role['id']) {
        case 1: // Proprietário
            return redirect()->to('/proprietario');
        case 2: // Bibliotecário
            return redirect()->to('/bibliotecario_view');
        case 3: // Administrador
            return redirect()->to('/administrador_view');
        default:
            session()->setFlashdata('error', 'Permissão inválida.');
            return redirect()->to('login');
    }
        
        return redirect()->to('/boas-vindas');
    }
    


}



