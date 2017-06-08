<?php
session_start();
if(isset($_SESSION['connection'])){
	if($_SESSION['connection']==1){

	}
	else{
		echo "Vous n'avez pas l'autorisation de visualiser cette page.";
		sleep(2);
		header('Location: /ProjetPhP/view/login.php');
	}
}
else{
	echo "La page sur laquelle vous essayez d'acceder n'existe pas ou plus :)";
	sleep(2);
	header('Location: /ProjetPhP/controler/tableau.php');
}
?>