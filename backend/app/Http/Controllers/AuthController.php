<?php

namespace App\Http\Controllers;

class AuthController
{
    public function login(): array
    {
        return [
            'token' => 'mock-token',
            'user' => [
                'id' => 1,
                'name' => 'Administrador',
                'role' => 'ADMIN',
            ],
        ];
    }

    public function logout(): array
    {
        return ['message' => 'Logout efetuado'];
    }
}
