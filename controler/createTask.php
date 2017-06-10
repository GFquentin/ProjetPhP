<?php

//phpinfo();die;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

	
	
	if($_SERVER['REQUEST_METHOD'] == 'GET') {
		include '../view/form-tache.php'; // Affiche le formulaire pour créer un flow	
	}
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		include '../model/task.php';
		if(!empty($_FILES)) {
			if($_FILES['fileToUpload']['error'] > 0) {
				$erreur = 'Une erreur est survenue lors du transfert du script !';
				echo $erreur;
			}
			else {
				$path = '/var/www/html/ProjetPhP/script/';				
				$resultat = move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $path.$_FILES['fileToUpload']['name']);
				if($resultat) {
					$msg = array(
						't_OK' => "Transfert réussi !",
						's_OK' => "Sauvegarde de la tâche dans la base de données..."
						);
					echo $msg['t_OK'].'<br>';
					sleep(2);
					echo $msg['s_OK'].'<br>';
					$script = $path.$_FILES['fileToUpload']['name'];
					$task = new Task(null, $script);
					$task->saveDb();
					sleep(2);
					header('Location: /ProjetPhP/controler/tableau.php');
				}
			}
		}
	}
?>