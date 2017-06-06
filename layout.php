<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Ordonnanceur</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="menu.css">
		<link rel="stylesheet" type="text/css" href="login.css">
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	</head>
	<body>
	<div class="container">
		<!-- Appel du menu  -->
		<div class="row">
			<div class="form-group col-md-12">
				<div class="form-control">
<?php
					include 'controler/controle.html';
?>
				</div>
			</div>
		</div>
			<!-- Appel des formulaires  -->
		<div class="row">
			<div class="form-group col-md-12">
				<!-- Appel du form-flow  -->
				<div class="col-md-offset-2 col-md-8">
					<div class="form-control">
<?php
						include 'view/form-flow.html';
?>
					</div>
				</div><br>
				<!-- Appel du form-tache  -->
				<div class="col-md-offset-2 col-md-8">
					<div class="form-control">
<?php
						include 'view/form-tache.html';
?>
					</div>
				</div>
			</div>
		</div>
	</div>
	</body>
</html>