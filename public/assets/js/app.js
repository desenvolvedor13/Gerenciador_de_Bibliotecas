import React from 'react';
import ReactDOM from 'react-dom/client';
import Topbar from "./components/Topbar";
import Sidebar from "./components/Sidebar";

// Componente App
const App = () => {
  return (
    <div id="wrapper" style={{ display: "flex", height: "100vh" }}>
      <Sidebar />
      <div id="content-wrapper" style={{ flexGrow: 1, padding: "20px" }}>
        <Topbar />
        <div className="content">
          <h1>Bem-vindo à área do Proprietário!</h1>
        </div>
      </div>
    </div>
  );
};

const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(<App />);
