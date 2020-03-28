<?php
   $col1=$_POST['nom'];
    $col2=$_POST['matricule'];
try {
	$bdd = new PDO("mysql:host=localhost;dbname=dispensaire","root","");
	$bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$sql = "DELETE FROM personnels WHERE NOMS='$col1'  AND MATRICULES = '$col2'";
	$sth = $bdd->prepare($sql);
	$sth->execute();
	$count = $sth->rowCount();
	print('effacement de' .$count. 'entrees');
	
	
} catch (PDOException $e) {
	echo"traitement impossible.".$e->getMessage();
}
?>