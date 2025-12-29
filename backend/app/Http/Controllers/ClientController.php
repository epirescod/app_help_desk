<?php

namespace App\Http\Controllers;

class ClientController
{
    public function index(): array
    {
        return ['data' => []];
    }

    public function store(): array
    {
        return ['message' => 'Cliente criado'];
    }

    public function update(): array
    {
        return ['message' => 'Cliente atualizado'];
    }
}
