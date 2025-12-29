<?php

namespace App\Http\Controllers;

class ProductController
{
    public function index(): array
    {
        return ['data' => []];
    }

    public function store(): array
    {
        return ['message' => 'Produto criado'];
    }
}
