<?php

return [
    'broadcasting' => [],
    'default_filesystem_disk' => env('FILESYSTEM_DISK', 'local'),
    'assets_path' => null,
    'cache_path' => base_path('bootstrap/cache/filament'),
    'livewire_loading_delay' => 'default',
    'file_generation' => [
        'flags' => [],
    ],
    'system_route_prefix' => 'filament',
    'panels' => [
        'default' => [
            'id' => 'admin',
            'path' => 'admin',
            'title' => 'Admin Panel',
        ],
    ],
];
