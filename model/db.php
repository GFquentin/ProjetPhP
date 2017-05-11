<?php
//
// Database configuration:
//
// DB host
$conf["db"]["server"] = "localhost";
// DB schema to select
$conf["db"]["schema"] = "projetPHP";
// DB user name
$conf["db"]["user"]   = "projet";
// DB user password
$conf["db"]["passwd"] = "Pr0j€c7?PHP";


$db = new PDO($conf["db"]["server"], $conf["db"]["schema"], 'charset=utf8', $conf["db"]["user"], $conf["db"]["passwd"]);
if($db->connect_errno)
{
    die("Impossible de se connecter à la base de données: " . $db->connect_errno . " - " . $db->connect_error);
}

?>