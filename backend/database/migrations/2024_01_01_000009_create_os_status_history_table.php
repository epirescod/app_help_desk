<?php

return [
    'table' => 'os_status_history',
    'columns' => [
        'id' => 'uuid',
        'os_id' => 'uuid',
        'status' => 'string',
        'internal_message' => 'text',
        'changed_by' => 'uuid',
    ],
];
