<?php

return [
    'table' => 'notification_templates',
    'columns' => [
        'id' => 'uuid',
        'status' => 'string',
        'template_key' => 'string',
        'channel' => 'string',
        'content' => 'text',
    ],
];
