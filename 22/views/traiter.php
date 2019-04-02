<?php
include "../core/userf.php";
$user1f=new userf();
$listeUser=$user1f->recuperer($_POST['email']);
print_r($listeUser);
foreach($listeUser as $row){

	
	echo $row['idc'];
	echo $row['email'];
	echo $row['nom'];
	echo $row['prenom'];
	echo $row['sexe'];
	echo $row['adr'];
	echo $row['dNaiss'];}
	echo $row['numero'];
	












?>