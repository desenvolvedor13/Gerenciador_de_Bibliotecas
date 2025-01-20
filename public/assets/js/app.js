import React from "react";
import ReactDOM from "react-dom/client";
import { BrowserRouter as Router, Route, Switch } from "react-router-dom"; // Importando o React Router
import Topbar from "./components/Topbar";
import Sidebar from "./components/Sidebar";
import CadastroAdministrador from "./pages/CadastroAdministrador"; // Página de Cadastro de Administrador
import ListarAdministradores from "./pages/ListarAdministradores"; // Página para listar administradores
import Configuracoes from "./pages/Configuracoes"; // Página de configurações
import "../css/style.css";

const App = () => {
  return (
    <Router> {/* Envolvendo a aplicação com o Router */}
      <div>
        <Sidebar />
        <Topbar institutionName="Prefeitura de SP" role="Proprietário" />
        <div id="wrapper">
          <div id="content-wrapper">
            <div className="content">
              <Switch>
                {/* Definindo as rotas */}
                <Route path="/adicionar-administrador" component={CadastroAdministrador} />
                <Route path="/listar-administradores" component={ListarAdministradores} />
                <Route path="/configuracoes" component={Configuracoes} />
                {/* Página inicial ou de manutenção */}
                <Route path="/" exact>
                  <h1>Bem-vindo à área do Proprietário!</h1>
                  <h4>Manutenção</h4>
                </Route>
              </Switch>
            </div>
          </div>
        </div>
      </div>
    </Router>
  );
};

const root = ReactDOM.createRoot(document.getElementById("root"));
root.render(<App />);
