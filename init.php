<!DOCTYPE html>

<html>


	<head>
		<title>dispensaire</title>
		
		<meta charset="utf-8" />
		
		<link rel="stylesheet" href="style.css">
	</head>
	
	<body>
<?php


if ( $_POST['pass'] == 'Infi1'){
	
 echo " acces accordé!! Mr".$_POST['nom']."   ";
 echo'cliquer <a href="paracon.html"> Parametres patients et consultation</a> <br />';
	}
 elseif ($_POST['pass'] == "Labo1") {

 echo " acces accordé!! Mr ." .$_POST['nom']."   ";
  echo'</br>   cliquer <a href="labo.html"> acceder au laboratoire</a> <br />';
	}

  elseif ($_POST['pass'] =="Pharma1") {


 echo " acces accordé!!   Mr ." .$_POST['nom']."   ";
echo'</br>   cliquer <a href="pharmacie.html"> acceder à la pharmacie</a> <br />';
 }
 elseif ($_POST['pass'] == "Admin1") {

 echo " acces accordé!! Mr ." .$_POST['nom']."   " ; 
 echo'</br>   cliquer <a href="personnels.html"> acceder à la gestion du personnels</a> <br />';


 } 

else {  echo"ACCES DENIED!!!!!!" ; 
}
 
?>
</body>
</html>
