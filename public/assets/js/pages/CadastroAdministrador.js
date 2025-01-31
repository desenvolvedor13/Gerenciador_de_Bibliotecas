// public/assets/js/componentes/CadastroAdministrador.js
import React, { useState } from 'react';
import axios from 'axios';

const CadastroAdministrador = () => {
  const [nome, setNome] = useState('');
  const [cpf, setCpf] = useState('');
  const [email, setEmail] = useState('');
  const [senha, setSenha] = useState('');
  const [logradouro, setLogradouro] = useState('');
  const [numero, setNumero] = useState('');
  const [bairro, setBairro] = useState('');
  const [cidade, setCidade] = useState('');
  const [cep, setCep] = useState('');
  const [instituicaoId, setInstituicaoId] = useState('');

  const handleSubmit = (e) => {
    e.preventDefault();
    const data = {
      nome,
      cpf,
      email,
      senha,
      logradouro,
      numero,
      bairro,
      cidade,
      cep,
      instituicao_id: instituicaoId,
    };

    axios.post('http://localhost/SIG_B/public/api/cadastro_administrador', data)
      .then(response => {
        alert('Cadastro realizado com sucesso!');
      })
      .catch(error => {
        console.error('Erro ao cadastrar administrador', error);
      });
  };

  return (
    <form onSubmit={handleSubmit}>
      <input type="text" value={nome} onChange={(e) => setNome(e.target.value)} placeholder="Nome" required />
      <input type="text" value={cpf} onChange={(e) => setCpf(e.target.value)} placeholder="CPF" required />
      <input type="email" value={email} onChange={(e) => setEmail(e.target.value)} placeholder="Email" required />
      <input type="password" value={senha} onChange={(e) => setSenha(e.target.value)} placeholder="Senha" required />
      <input type="text" value={logradouro} onChange={(e) => setLogradouro(e.target.value)} placeholder="Logradouro" required />
      <input type="text" value={numero} onChange={(e) => setNumero(e.target.value)} placeholder="Número" required />
      <input type="text" value={bairro} onChange={(e) => setBairro(e.target.value)} placeholder="Bairro" required />
      <input type="text" value={cidade} onChange={(e) => setCidade(e.target.value)} placeholder="Cidade" required />
      <input type="text" value={cep} onChange={(e) => setCep(e.target.value)} placeholder="CEP" required />
      <select value={instituicaoId} onChange={(e) => setInstituicaoId(e.target.value)} required>
        <option value="">Selecione a Instituição</option>
        {/* As opções de instituições devem ser populadas dinamicamente */}
      </select>
      <button type="submit">Cadastrar Administrador</button>
    </form>
  );
};

export default CadastroAdministrador;
