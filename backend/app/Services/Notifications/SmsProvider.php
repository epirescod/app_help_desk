<?php

namespace App\Services\Notifications;

class SmsProvider implements NotificationProviderInterface
{
    public function send(array $message): array
    {
        return ['status' => 'SENT', 'provider' => 'mock-sms', 'message' => $message];
    }
}
