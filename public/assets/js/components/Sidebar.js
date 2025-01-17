import React, { useEffect, useState } from "react";
import { getLogoUrl } from './api'; // Importando a função getLogoUrl

const Sidebar = () => {
  const [logoPath, setLogoPath] = useState('');

  useEffect(() => {
    // Chama a função para pegar o caminho da logo quando o componente for montado
    const fetchLogo = async () => {
      const logoUrl = await getLogoUrl();
      setLogoPath(logoUrl);  // Atualiza o estado com o caminho da logo
    };

    fetchLogo();  // Chama a função
  }, []); // A dependência vazia faz com que execute apenas uma vez no mount

  return (
    <div className="sidebar" id="sidebar">
      {/* Exibindo a logo se o caminho for encontrado */}
      {logoPath ? (
        <img src={logoPath} alt="SisB Logo" style={{ width: '100%' }} />
      ) : (
        <p>Carregando logo...</p>  // Exibe uma mensagem enquanto carrega
      )}

      <ul>
        <li className="nav-item">
          <a className="nav-link" href="#">Adicionar Administrador</a>
        </li>
        <li className="nav-item">
          <a className="nav-link" href="#">Listar Administradores</a>
        </li>
        <li className="nav-item">
          <a className="nav-link" href="#">Configurações</a>
        </li>
      </ul>
    </div>
  );
};

export default Sidebar;
