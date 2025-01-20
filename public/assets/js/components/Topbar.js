import React from "react";

const Topbar = ({ institutionName, role }) => {
  return (
    <div className="topbar">
      <div className="container-fluid d-flex justify-content-between align-items-center">
        <span className="navbar-brand">
          SisB - {institutionName} - {role}
        </span>
        <a href="#" className="btn logout">
          Sair
        </a>
      </div>
    </div>
  );
};

export default Topbar;
