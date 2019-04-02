<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/client.php";
include "../core/ClientC.php";
if (isset($_GET['mdp'])){
	$ClientC=new ClientC();
    $result=$ClientC->recupererclient($_GET['mdp']);
	foreach($result as $row){
		$mdp=$row['mdp'];
		$mail=$row['mail'];
		$nom=$row['nom'];
		$prenom=$row['prenom'];
		$ville=$row['ville'];
	
?>
<form method="POST">
<table>
<caption>Modifier Client</caption>
<tr>
<td>mail</td>
<td><input type="number" name="mail" value="<?PHP echo $mail ?>"></td>
</tr>
<tr>
<td>Nom</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>Prenom</td>
<td><input type="text" name="prenom" value="<?PHP echo $prenom ?>"></td>
</tr>
<tr>
<td>Mot de passe</td>
<td><input type="number" name="mdp" value="<?PHP echo $mdp ?>"></td>
</tr>
<tr>
<td>Ville</td>
<td><input type="number" name="ville" value="<?PHP echo $ville ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="mail_ini" value="<?PHP echo $_GET['mdp'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$client=new client($_POST['mail'],$_POST['nom'],$_POST['prenom'],$_POST['mdp'],$_POST['ville']);
	$ClientC->modifierclient($client,$_POST['mdp_ini']);
	echo $_POST['mdp_ini'];
	header('Location: afficherclient.php');
}
?>
</body>
</HTMl>	