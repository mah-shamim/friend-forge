<?php
return array(
    'app_name' => getenv('APP_NAME') ?: 'FriendForge AI',
    'db' => array(
        'host' => getenv('DB_HOST') ?: 'db',
        'name' => getenv('DB_NAME') ?: 'friendforge',
        'user' => getenv('DB_USER') ?: 'friendforge',
        'pass' => getenv('DB_PASS') ?: 'friendforge'
    ),
    'ollama_url' => getenv('OLLAMA_URL') ?: 'http://ollama:11434',
    'ollama_model' => getenv('OLLAMA_MODEL') ?: 'qwen2.5:3b'
);
