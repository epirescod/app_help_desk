<?php

return [
    'table' => 'products',
    'columns' => [
        'id' => 'uuid',
        'sku' => 'string',
        'name' => 'string',
        'category' => 'string',
        'cost' => 'decimal',
        'sale_price' => 'decimal',
        'stock' => 'integer',
        'min_stock' => 'integer',
        'unit' => 'string',
    ],
];
