# Sistema de Funilaria (MVP)

Monorepo com backend (Laravel 11 API), frontend (React + Vite + TS) e infraestrutura dockerizada.

## Como subir

```bash
docker compose up --build
```

### Migrations e seeds

```bash
docker compose exec api php artisan migrate --seed
```

## Credenciais do admin seed

- Email: admin@sistema.funilaria
- Senha: admin123

## Rotas principais (API v1)

- `POST /api/v1/auth/login`
- `POST /api/v1/auth/logout`
- `GET /api/v1/os`
- `POST /api/v1/os`
- `POST /api/v1/os/{id}/status`
- `GET /api/v1/os/{id}/timeline`
- `POST /api/v1/os/{id}/items`
- `POST /api/v1/os/{id}/attachments`
- `GET /api/v1/os/{id}/notifications`

## Trocar providers de notificação futuramente

Os providers estão encapsulados na interface `App\Services\Notifications\NotificationProviderInterface`. Para integrar um provider real, implemente a interface e registre no `NotificationProviderManager`.

## Observações

- Storage local para imagens em `storage/app/public` com symlink `public/storage`.
- Logs estruturados em JSON.
