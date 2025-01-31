import React, { useEffect, useState } from 'react';
import axios from 'axios';
import { Link } from 'react-router-dom';  // Importando Link do React Router

const Sidebar = () => {
  const [logoUrl, setLogoUrl] = useState('');

  useEffect(() => {
    axios.get('http://localhost/SIG_B/public/api/get_logo_url')
      .then(response => {
        setLogoUrl(response.data.logo_url);
      })
      .catch(error => {
        console.error('Erro ao buscar a logo:', error);
      });
  }, []);

  return (
    <div className="sidebar">
      <div className="sidebar-logo">
        {logoUrl ? (
          <img src={logoUrl} alt="Logo" />
        ) : (
          <p>Carregando logo...</p>
        )}
      </div>
       <ul>
        <li className="nav-item">
          <Link className="nav-link" to="/adicionar-administrador">Adicionar Administrador</Link>
        </li>
        <li className="nav-item">
          <Link className="nav-link" to="/listar-administradores">Listar Administradores</Link>
        </li>
        <li className="nav-item">
          <Link className="nav-link" to="/configuracoes">Configurações</Link>
        </li>
      </ul>
    </div>
  );
};

export default Sidebar;
