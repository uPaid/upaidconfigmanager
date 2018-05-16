<?php
/**
 * Package configuration.
 */
return [
    /**
     * Configuration files paths. ['file_name' => 'file_path']
     */
    'keys_paths' => [
        '.env' => '',
        'upaid-trevica-openapi.crt' => '.env.files/keys/oAuth/{appName}/',
        'upaid.pl.key' => '.env.files/keys/oAuth/{appName}/',
        'frontend.json' => 'config/frontend_config/',
    ],
    'validate_files' => true
];