<?php

namespace Database\Seeders;

class DatabaseSeeder
{
    public function run(): array
    {
        return [
            'roles' => ['ADMIN', 'GERENTE', 'ATENDENTE', 'TECNICO'],
            'units' => [
                ['name' => 'Unidade Central', 'city' => 'São Paulo'],
            ],
            'users' => [
                ['name' => 'Administrador', 'email' => 'admin@sistema.funilaria', 'role' => 'ADMIN'],
            ],
            'statuses' => [
                'Recebido',
                'Em Avaliação',
                'Orçamento Enviado',
                'Aguardando Aprovação',
                'Aprovado',
                'Em Reparo',
                'Em Pintura',
                'Em Montagem',
                'Polimento/Acabamento',
                'Qualidade',
                'Pronto para Retirada',
                'Entregue',
            ],
            'notification_templates' => [
                [
                    'status' => 'Recebido',
                    'template_key' => 'status_changed',
                    'channel' => 'WHATSAPP',
                    'content' => 'Olá {cliente_nome}, seu veículo {placa} foi recebido na {unidade_nome}.',
                ],
            ],
        ];
    }
}
