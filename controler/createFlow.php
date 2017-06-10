<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

	/*include '../model/flow.php';
	if(!empty($_POST)) {
		print_r($_POST);
		$hostList = array();
		$flow = new Flow(); // On créé un nouvel objet de classe Flow
		// Boucle pour attribuer chaque valeur du formulaire dans la classe flow
		foreach ($_POST as $key => $value) {
			if ($value == 'select_task'.$key+1) {
				array_push($flow['hostlist'], $value); // On pousse chaque tâche dans la liste des tâches
			}
			if ($value == 'select_user'.$key+1) {
				array_push($flow['userlist'], $value); // On pousse chaque utilisateur dans la liste des utilisateurs
			}
			if ($value == 'select_host'.$key+1) {
				array_push($flow['hostlist'], $value); // On pousse chaque hôte dans la liste des hôtes
			}
		}
		$flow["name"] = $_POST["name_task"];
	}
	else {
		echo "Aucune donnée n'a été indiquée dans le formulaire de création de flow.";
	}
	echo '<br>';
	print_r($flow);*/
	if($_SERVER['REQUEST_METHOD'] == 'GET') {
		// Chargement de tous les fichiers (models)
		include '../model/task.php';
		include '../model/host.php';
		include '../model/user.php';
		$tasks = new Task($id, $script);
		$dataTasks = $tasks->getTask(); // Récupération des tâches
		$nameTask = array();
		foreach ($dataTasks as $key => $value) {
			$tmp = $value['script'];
			$script = substr(strrchr($tmp, '/'), 1);
			array_push($nameTask, $script);
		}
		// print_r($nameTask);
		include '../view/form-flow.php';
	}
	if($_SERVER['REQUEST_METHOD'] == 'POST') {

	}
?>