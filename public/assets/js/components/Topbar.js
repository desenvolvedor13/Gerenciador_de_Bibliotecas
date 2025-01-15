import React from "react";

const Topbar = () => {
  return (  
    <div className="topbar" style={{ background: "#343a40", color: "white", padding: "10px" }}>
      <div className="container-fluid d-flex justify-content-between align-items-center">
        <span
          className="navbar-brand"
          id="toggleSidebarButton"
          style={{ cursor: "pointer" }}
          onClick={() => console.log('Sidebar toggled')}
        >
          ☰ SIG BIBLIOTECA
        </span>
        <a href="<?= base_url('logout'); ?>" className="btn btn-danger logout" style={{ textDecoration: "none" }}>
          Sair
        </a>
      </div>
    </div>
  );
};

export default Topbar;
