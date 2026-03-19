<?php

// ZincSearch configuration
return [
    'zinc' => [
        'host' => 'http://localhost:4080', // ZincSearch host
        'index' => 'my_index', // Default index name
    ],

    // Borg configuration
    'borg' => [
        'base_url' => 'http://localhost:5000', // Borg base URL
        'token' => 'your_secret_token', // Authorization token, keep it secret
    ],
];