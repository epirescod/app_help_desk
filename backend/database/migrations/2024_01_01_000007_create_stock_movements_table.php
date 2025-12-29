<?php

return [
    'table' => 'stock_movements',
    'columns' => [
        'id' => 'uuid',
        'product_id' => 'uuid',
        'type' => 'string',
        'quantity' => 'integer',
        'reason' => 'string',
        'os_id' => 'uuid',
        'created_by' => 'uuid',
    ],
];
