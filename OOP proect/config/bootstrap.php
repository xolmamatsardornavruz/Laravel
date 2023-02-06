<?php

require_once 'autoload.php';

// Bazaga ulanib olish:
$database= new Database('localhost', 'oop-teach', 'root', '',);
$pdo = $database->connect();
Post::$pdo=$pdo;


?>