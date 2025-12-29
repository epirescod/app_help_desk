import { Routes, Route, Navigate } from 'react-router-dom';
import LoginPage from './pages/LoginPage';
import DashboardLayout from './layouts/DashboardLayout';
import OsListPage from './pages/OsListPage';
import OsDetailPage from './pages/OsDetailPage';
import ClientsPage from './pages/ClientsPage';
import VehiclesPage from './pages/VehiclesPage';
import ProductsPage from './pages/ProductsPage';

export default function App() {
  return (
    <Routes>
      <Route path="/login" element={<LoginPage />} />
      <Route path="/" element={<DashboardLayout />}>
        <Route index element={<Navigate to="/os" replace />} />
        <Route path="os" element={<OsListPage />} />
        <Route path="os/:id" element={<OsDetailPage />} />
        <Route path="clientes" element={<ClientsPage />} />
        <Route path="veiculos" element={<VehiclesPage />} />
        <Route path="produtos" element={<ProductsPage />} />
      </Route>
    </Routes>
  );
}
