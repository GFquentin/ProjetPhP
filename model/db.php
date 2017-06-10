<?php
//
// Database configuration:
//
// DB host
//// DB schema to select
//$conf["db"]["schema"] = "projetPHP";
// DB user name
//$conf["db"]["user"]   = "projet";
// DB user password
//$conf["db"]["passwd"] = "Pr0j€c7?PHP";


$dsn = 'mysql:host=127.0.0.1;dbname=projetphp';
$user = 'projet';
$password = 'projet';

try {
    $db = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

