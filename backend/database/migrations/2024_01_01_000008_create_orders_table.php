<?php

return [
    'table' => 'service_orders',
    'columns' => [
        'id' => 'uuid',
        'unit_id' => 'uuid',
        'client_id' => 'uuid',
        'vehicle_id' => 'uuid',
        'sequence_number' => 'integer',
        'description' => 'text',
        'delivery_forecast' => 'date',
        'status' => 'string',
        'created_by' => 'uuid',
    ],
];
