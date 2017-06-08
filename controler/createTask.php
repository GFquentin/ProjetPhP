<?php
	include('../model/task.php');
	if(!empty($_POST)) {
		print_r($_POST);
		$task = new Task(); // On créé un nouvel objet de classe Task
		$task = array(
			''
		)
	}
?>