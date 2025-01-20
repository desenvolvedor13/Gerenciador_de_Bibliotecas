// public/assets/js/pages/CadastroAdministrador.js
import React, { useState } from 'react';
import axios from 'axios';

const CadastroAdministrador = () => {
  const [formData, setFormData] = useState({
    nome: '',
    cpf: '',
    email: '',
    senha: '',
    logradouro: '',
    numero: '',
    bairro: '',
    cidade: '',
    cep: '',
    instituicao_id: ''
  });

  const handleChange = (e) => {
    const { name, value } = e.target;
    setFormData({
      ...formData,
      [name]: value
    });
  };

  const handleSubmit = async (e) => {
    e.preventDefault();
    try {
      const response = await axios.post('http://localhost/SIG_B/public/api/cadastro_administrador', formData);
      alert('Administrador cadastrado com sucesso!');
    } catch (error) {
      console.error(error);
      alert('Erro ao cadastrar administrador.');
    }
  };

  return (
    <div>
      <h2>Cadastro de Administrador</h2>
      <form onSubmit={handleSubmit}>
        <input type="text" name="nome" placeholder="Nome" onChange={handleChange} value={formData.nome} required />
        <input type="text" name="cpf" placeholder="CPF" onChange={handleChange} value={formData.cpf} required />
        <input type="email" name="email" placeholder="Email" onChange={handleChange} value={formData.email} required />
        <input type="password" name="senha" placeholder="Senha" onChange={handleChange} value={formData.senha} required />
        <input type="text" name="logradouro" placeholder="Logradouro" onChange={handleChange} value={formData.logradouro} required />
        <input type="text" name="numero" placeholder="Número" onChange={handleChange} value={formData.numero} required />
        <input type="text" name="bairro" placeholder="Bairro" onChange={handleChange} value={formData.bairro} required />
        <input type="text" name="cidade" placeholder="Cidade" onChange={handleChange} value={formData.cidade} required />
        <input type="text" name="cep" placeholder="CEP" onChange={handleChange} value={formData.cep} required />
        <input type="text" name="instituicao_id" placeholder="Instituição" onChange={handleChange} value={formData.instituicao_id} required />
        <button type="submit">Cadastrar</button>
      </form>
    </div>
  );
};

export default CadastroAdministrador;
