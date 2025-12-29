<?php

namespace App\Services\Notifications;

class WhatsAppProvider implements NotificationProviderInterface
{
    public function send(array $message): array
    {
        return ['status' => 'SENT', 'provider' => 'mock-whatsapp', 'message' => $message];
    }
}
