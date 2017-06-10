<?php
//demarrage de session
if($_SERVER['REQUEST_METHOD'] == 'GET') {
	include '../view/login.php';
}
if($_SERVER['REQUEST_METHOD'] == 'POST') {
session_start();
//inclusion de la page de connexion mysql
include '../model/db.php';

//test et traitement des identifiant saisi par l'utilisateur
if(!empty($_POST['identifiant']) && !empty($_POST['motdepass'])){
$identifiant = $_POST['identifiant'];
//supression de caractères indésirables type : ' " < > 

#$identifiant = mysql_real_escape_string($identifiant);

$identifiant = htmlentities($identifiant);

$motdepass = $_POST['motdepass'];
#$motdepass = mysql_real_escape_string($motdepass);
$motdepass = htmlentities($motdepass);
//cryptage sha1 du mot de pass

#$motdepass = sha1($motdepass);

//selection de l'utilisateur et du mdp dans la base

$query = "SELECT login, password FROM user WHERE login = \"$identifiant \" AND password = \"$motdepass\" ";
$prep = $db->prepare($query);
$prep->execute();
$tableaux = $prep->fetchAll();


//test de résultat utilisateur/Mysql
if ($identifiant == $tableaux[0][0] && $motdepass == $tableaux[0][1]){
$_SESSION['connection']=1;
$_SESSION['utilisateur']=$tableaux[0];
header('Location: tableau.php');  
}
else {
$_SESSION['badlogin'] = 1;
sleep(2);
header('Location: ../view/login.php');
}
}
else{
echo "Identifiant ou mot de pass incorrect....";
$_SESSION['connection']=0;
header('Location: ../view/login.php'); 
}
}














?>