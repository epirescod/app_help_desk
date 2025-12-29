<?php

namespace App\Http\Controllers;

use App\Services\NotificationService;

class OsController
{
    public function index(): array
    {
        return ['data' => []];
    }

    public function store(): array
    {
        return ['message' => 'OS criada'];
    }

    public function show(): array
    {
        return ['data' => []];
    }

    public function changeStatus(): array
    {
        $service = new NotificationService();
        $service->queueStatusChanged(1, 'Aprovado');

        return ['message' => 'Status atualizado'];
    }

    public function timeline(): array
    {
        return ['data' => []];
    }

    public function addItem(): array
    {
        return ['message' => 'Item adicionado'];
    }

    public function uploadAttachment(): array
    {
        return ['message' => 'Anexo enviado'];
    }
}
