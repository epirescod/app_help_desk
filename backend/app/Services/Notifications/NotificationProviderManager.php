<?php

namespace App\Services\Notifications;

class NotificationProviderManager
{
    public function resolve(string $channel): NotificationProviderInterface
    {
        return match ($channel) {
            'WHATSAPP' => new WhatsAppProvider(),
            'EMAIL' => new EmailProvider(),
            'SMS' => new SmsProvider(),
            default => new WhatsAppProvider(),
        };
    }
}
