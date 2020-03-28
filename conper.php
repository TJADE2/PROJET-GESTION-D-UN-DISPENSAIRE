<?php
$sql = "SELECT * FROM personnels";



try {
	$bdd = new PDO("mysql:host=localhost;dbname=dispensaire","root","");
	$bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$result=$bdd->query($sql);
		
		echo '<ul>';
while($donne=$result->fetch()){

echo '<li>' . $donne['Noms'] . '  ' . $donne['Prenoms'] . ' ' . $donne['Matricules']. ' ' . $donne['Fonctions'].'</li>';
}
echo '</ul>';

} catch (PDOException $e) {
	echo"traitement impossible.".$e->getMessage();}
?>
