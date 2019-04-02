<?PHP
include "../core/ClientF.php";
$Client1F=new ClientF();
$listeclient=$Client1F->afficherclients();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>Ndentifiant</td>
<td>Nom</td>
<td>Prenom</td>
<td>Email</td>
<td>Sexe</td>
<td>Adresse</td>
<td>Numero</td>
<td>Date de naissance</td>
<td>Points</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeclient as $row){
	?>
	<tr>
	<td><?PHP echo $row['idc']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['prenom']; ?></td>
	<td><?PHP echo $row['email']; ?></td>
	<td><?PHP echo $row['sexe']; ?></td>
	<td><?PHP echo $row['adr']; ?></td>
	<td><?PHP echo $row['numero']; ?></td>
	<td><?PHP echo $row['pts']; ?></td>
	<td><?PHP echo $row['dNaiss']; ?></td>
	<td><form method="POST" action="supprimerclient.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['email']; ?>" name="email">
	</form>
	</td>
	<td><a href="modifierclient.php?idc=<?PHP echo $row['idc']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>
