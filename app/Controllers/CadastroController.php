<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

// app/Controllers/CadastroController.php
// app/Controllers/CadastroController.php
namespace App\Controllers;

use App\Models\InstituicaoModel;
use App\Models\LoginModel;
use App\Models\PessoaModel;
use App\Models\EnderecoModel;

class CadastroController extends BaseController
{
    public function cadastro_administrador()
    {
        // Recebe os dados do formulário via POST
        $dados = $this->request->getPost();

        // Validação dos dados
        if (empty($dados['nome']) || empty($dados['cpf']) || empty($dados['email']) || empty($dados['senha'])) {
            return $this->response->setStatusCode(400)->setBody('Dados inválidos');
        }

        // Cadastrar na tabela pessoa
        $pessoaModel = new PessoaModel();
        $pessoaData = [
            'nome' => $dados['nome'],
            'cpf' => $dados['cpf'],
            'data_cadastro' => date('Y-m-d H:i:s'),
            'tipo_pessoa' => 'admin', // Tipo de pessoa
        ];

        // Verifica se a pessoa foi criada com sucesso
        $pessoaId = $pessoaModel->insert($pessoaData);
        if (!$pessoaId) {
            return $this->response->setStatusCode(500)->setBody('Erro ao cadastrar pessoa');
        }

        // Cadastrar na tabela endereço
        $enderecoModel = new EnderecoModel();
        $enderecoData = [
            'id_pessoa' => $pessoaId,
            'logradouro' => $dados['logradouro'],
            'numero' => $dados['numero'],
            'bairro' => $dados['bairro'],
            'cidade' => $dados['cidade'],
            'cep' => $dados['cep'],
        ];

        // Verifica se o endereço foi cadastrado com sucesso
        if (!$enderecoModel->insert($enderecoData)) {
            return $this->response->setStatusCode(500)->setBody('Erro ao cadastrar endereço');
        }

        // Cadastrar no login (com senha segura)
        $loginModel = new LoginModel();
        $loginData = [
            'pessoa_id' => $pessoaId,
            'email' => $dados['email'],
            'senha' => password_hash($dados['senha'], PASSWORD_DEFAULT), // Armazenando a senha de forma segura
            'role_id' => 1, // Role de administrador (1 é o ID do administrador, ajustado conforme sua tabela de roles)
        ];

        // Verifica se o login foi cadastrado com sucesso
        if (!$loginModel->insert($loginData)) {
            return $this->response->setStatusCode(500)->setBody('Erro ao cadastrar login');
        }

        // Cadastrar na tabela instituição (vincular a instituição ao administrador)
        $instituicaoModel = new InstituicaoModel();
        $instituicaoData = [
            'nome' => $dados['instituicao_id'], // Supondo que o nome da instituição seja enviado
            'cnpj' => $dados['cnpj'], // O CNPJ deve ser passado no formulário
        ];

        // Verifica se a instituição foi cadastrada com sucesso
        if (!$instituicaoModel->insert($instituicaoData)) {
            return $this->response->setStatusCode(500)->setBody('Erro ao cadastrar instituição');
        }

        // Resposta de sucesso
        return $this->response->setStatusCode(200)->setBody('Administrador cadastrado com sucesso');
    }
}
