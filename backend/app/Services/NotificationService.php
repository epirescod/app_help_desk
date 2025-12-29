<?php

namespace App\Services;

use App\Services\Notifications\NotificationProviderManager;

class NotificationService
{
    public function queueStatusChanged(int $osId, string $status): array
    {
        $message = [
            'os_id' => $osId,
            'status' => $status,
            'template_key' => 'status_changed',
            'payload' => [
                'cliente_nome' => 'Cliente',
                'placa' => 'ABC-1234',
                'status' => $status,
                'previsao_entrega' => '2024-01-01',
                'unidade_nome' => 'Unidade Central',
            ],
        ];

        $manager = new NotificationProviderManager();
        $provider = $manager->resolve('WHATSAPP');

        return $provider->send($message);
    }
}
