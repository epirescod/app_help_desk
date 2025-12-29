<?php

namespace App\Http\Controllers;

class VehicleController
{
    public function index(): array
    {
        return ['data' => []];
    }

    public function store(): array
    {
        return ['message' => 'Veículo criado'];
    }
}
