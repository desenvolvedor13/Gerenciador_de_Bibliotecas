import React from "react";

const Sidebar = () => {
  return (
    <div className="sidebar" style={{ background: "#f8f9fa", width: "250px", height: "100vh", position: "fixed" }}>
      <ul style={{ listStyleType: "none", padding: "0" }}>
        <li><a href="#">Adicionar Administrador</a></li>
        <li><a href="#">Listar Administradores</a></li>
        <li><a href="#">Configurações</a></li>
      </ul>
    </div>
  );
};

export default Sidebar;
