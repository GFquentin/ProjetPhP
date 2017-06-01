<?php
$chemin = $_GET["chemin"];
$file = file_get_contents($chemin);
echo "$file";


?>