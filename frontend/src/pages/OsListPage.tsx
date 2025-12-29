import { useState } from 'react';

export default function OsListPage() {
  const [status, setStatus] = useState('');
  const [placa, setPlaca] = useState('');
  const [cliente, setCliente] = useState('');

  return (
    <section>
      <h2>Ordens de Serviço</h2>
      <div style={{ display: 'flex', gap: 12, marginBottom: 16 }}>
        <input placeholder="Status" value={status} onChange={(event) => setStatus(event.target.value)} />
        <input placeholder="Placa" value={placa} onChange={(event) => setPlaca(event.target.value)} />
        <input placeholder="Cliente" value={cliente} onChange={(event) => setCliente(event.target.value)} />
      </div>
      <div>Lista de OS (mock)</div>
    </section>
  );
}
