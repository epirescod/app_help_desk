<?php

return [
    'table' => 'os_attachments',
    'columns' => [
        'id' => 'uuid',
        'os_id' => 'uuid',
        'filename' => 'string',
        'type' => 'string',
        'uploaded_by' => 'uuid',
    ],
];
