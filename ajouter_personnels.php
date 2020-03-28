<?php
$col1 = $_POST["nom"]; 
$col2 = $_POST["prenom"];
$col3 = $_POST["matricule"];
$col4 = $_POST["fonction"];   
try {
	$bdd = new PDO("mysql:host=localhost;dbname=dispensaire","root","");
	$bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$sth = $bdd->prepare("INSERT INTO personnels(Noms,Prenoms,Matricules,Fonctions) VALUES(:col1,:col2,:col3,:col4)");
	$sth->bindParam(':col1',$col1);
	$sth->bindParam(':col2',$col2);
	$sth->bindParam(':col3',$col3);
	$sth->bindParam(':col4',$col4);
	$sth->execute();
	header("Location:ajouter.html");
	
} catch (PDOException $e) {
	echo"traitement impossible.".$e->getMessage();
}?>