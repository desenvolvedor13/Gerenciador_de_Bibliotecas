/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/javascript.js to edit this template
 */


// public/assets/js/pages/ListarAdministradores.js
import React, { useState, useEffect } from 'react';
import axios from 'axios';

const ListarAdministradores = () => {
  const [administradores, setAdministradores] = useState([]);

  useEffect(() => {
    axios.get('http://localhost/SIG_B/public/api/listar_administradores')
      .then((response) => {
        setAdministradores(response.data);
      })
      .catch((error) => {
        console.error('Erro ao listar administradores:', error);
      });
  }, []);

  return (
    <div>
      <h2>Listar Administradores</h2>
      <ul>
        {administradores.map((admin) => (
          <li key={admin.id}>{admin.nome} - {admin.email}</li>
        ))}
      </ul>
    </div>
  );
};

export default ListarAdministradores;
