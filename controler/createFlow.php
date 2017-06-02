<?php
	include('../model/flow.php');
	if(!empty($_POST)) {
		print_r($_POST);
		$hostList = array();
		$flow = new Flow(); // On créé un nouvel objet de classe Flow
		// Boucle pour attribuer chaque valeur du formulaire dans la classe flow
		foreach ($$_POST as $key => $value) {
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
	print_r($flow);
?>