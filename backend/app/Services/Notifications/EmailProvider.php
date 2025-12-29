<?php

namespace App\Services\Notifications;

class EmailProvider implements NotificationProviderInterface
{
    public function send(array $message): array
    {
        return ['status' => 'SENT', 'provider' => 'mock-email', 'message' => $message];
    }
}
