import React from "react";

const Topbar = () => {
  return (
    <div className="topbar" style={{ background: "#343a40", color: "white", padding: "10px" }}>
      <span>SIG Biblioteca</span>
      <button className="btn btn-danger" style={{ float: "right" }}>Sair</button>
    </div>
  );
};

export default Topbar;
