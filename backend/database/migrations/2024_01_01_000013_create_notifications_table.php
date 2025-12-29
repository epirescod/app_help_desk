<?php

return [
    'table' => 'notifications',
    'columns' => [
        'id' => 'uuid',
        'os_id' => 'uuid',
        'channel' => 'string',
        'recipient' => 'string',
        'template_key' => 'string',
        'payload_json' => 'json',
        'status' => 'string',
        'attempts' => 'integer',
        'last_error' => 'string',
    ],
];
