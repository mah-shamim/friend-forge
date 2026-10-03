<?php
class Database {
    private $pdo;
    public function __construct($config) {
        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['name'].';charset=utf8';
        $this->pdo = new PDO($dsn, $config['user'], $config['pass'], array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ));
    }
    public function pdo() { return $this->pdo; }
}
