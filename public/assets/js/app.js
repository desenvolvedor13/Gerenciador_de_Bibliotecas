import React from "react";
import ReactDOM from "react-dom/client";
import Topbar from "./components/Topbar";
import Sidebar from "./components/Sidebar";
import "../css/style.css";

const App = () => {
  return (
    <div>
      <Sidebar />
      <Topbar institutionName="Prefeitura de SP" role="Proprietário" />
      <div id="wrapper">
        <div id="content-wrapper">
          <div className="content">
            <h1>Bem-vindo à área do Proprietário!</h1>
            <h4>Manutenção</h4>
          </div>
        </div>
      </div>
    </div>
  );
};

const root = ReactDOM.createRoot(document.getElementById("root"));
root.render(<App />);
