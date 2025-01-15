import React from "react";
import "/public/assets/css/style.css";


const Sidebar = () => {
  return (
    <div className="sidebar" id="sidebar"> {/* Use className para React */}
      <ul>
        <li class="nav-item" >
        <a class="nav-link" href="#">Adicionar Administrador 4</a>
        </li>
        <li class="nav-item">
        <a href="#">Listar Administradores
        </a></li>
        <li class="nav-item">
        <a class="nav-link" href="#">Configurações</a>
        </li>
      </ul>
    </div>
  );
};

export default Sidebar;
