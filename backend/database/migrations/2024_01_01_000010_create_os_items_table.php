<?php

return [
    'table' => 'os_items',
    'columns' => [
        'id' => 'uuid',
        'os_id' => 'uuid',
        'type' => 'string',
        'description' => 'string',
        'product_id' => 'uuid',
        'quantity' => 'integer',
        'unit_price' => 'decimal',
        'subtotal' => 'decimal',
    ],
];
