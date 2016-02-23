<?php
require_once ('dbconf.php');

global $config;

$pdo = new PDO($config['host'], $config['user'], $config['password']);

return $pdo;