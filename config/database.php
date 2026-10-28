<?php

require_once __DIR__ . '/../partials/env.php';

load_env(__DIR__ . '/../.env.local');
load_env(__DIR__ . '/../.env');

$url = env_value('DATABASE_URL');

if ($url !== '') {
    $parts = parse_url($url);
    parse_str($parts['query'] ?? '', $query);

    return [
        'host' => $parts['host'] ?? '127.0.0.1',
        'port' => (string) ($parts['port'] ?? '5432'),
        'database' => ltrim($parts['path'] ?? '/postgres', '/'),
        'username' => rawurldecode($parts['user'] ?? 'postgres'),
        'password' => rawurldecode($parts['pass'] ?? ''),
        'sslmode' => $query['sslmode'] ?? env_value('DB_SSLMODE', 'require'),
    ];
}

return [
    'host' => env_value('DB_HOST', '127.0.0.1'),
    'port' => env_value('DB_PORT', '5432'),
    'database' => env_value('DB_NAME', 'portfolio'),
    'username' => env_value('DB_USER', 'postgres'),
    'password' => env_value('DB_PASS'),
    'sslmode' => env_value('DB_SSLMODE', 'prefer'),
];
