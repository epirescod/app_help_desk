import { Outlet, Link } from 'react-router-dom';
import './DashboardLayout.css';

export default function DashboardLayout() {
  return (
    <div className="layout">
      <aside className="sidebar">
        <h1>Sistema de Funilaria</h1>
        <nav>
          <Link to="/os">Ordens de Serviço</Link>
          <Link to="/clientes">Clientes</Link>
          <Link to="/veiculos">Veículos</Link>
          <Link to="/produtos">Produtos</Link>
        </nav>
      </aside>
      <main className="content">
        <Outlet />
      </main>
    </div>
  );
}
