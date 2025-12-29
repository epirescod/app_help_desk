<?php

namespace App\Services\Notifications;

interface NotificationProviderInterface
{
    public function send(array $message): array;
}
