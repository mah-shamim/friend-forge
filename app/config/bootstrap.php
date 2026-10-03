<?php
$config = require __DIR__.'/config.php';
require_once __DIR__.'/../lib/Database.php';
require_once __DIR__.'/../lib/Ollama.php';
$db = new Database($config['db']);
$ai = new Ollama($config['ollama_url'], $config['ollama_model']);
function e($value) { return htmlspecialchars($value, ENT_QUOTES, 'UTF-8'); }
