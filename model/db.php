<?php

$db = new PDO($conf["db"]["server"], $conf["db"]["schema"], 'charset=utf8', $conf["db"]["user"], $conf["db"]["passwd"]);
if($db->connect_errno)
{
    die("Impossible de se connecter à la base de données: " . $db->connect_errno . " - " . $db->connect_error);
}

?>