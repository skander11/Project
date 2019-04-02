<?PHP
include "../core/userf.php";
$user1f=new userf();
$listeUser=$user1f->afficheruser();


?>
<table border="1">
<tr>
<td>Identifiant</td>
<td>Email</td>
<td>Nom</td>
<td>Prenom</td>
<td>Sexe</td>
<td>Adresse</td>
<td>Date de naissance</td>
<td>Numero</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeUser as $row){
	?>
	<tr>
	<td><?PHP echo $row['idc']; ?></td>
	<td><?PHP echo $row['email']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['prenom']; ?></td>
	<td><?PHP echo $row['sexe']; ?></td>
	<td><?PHP echo $row['adr']; ?></td>
	<td><?PHP echo $row['dNaiss']; ?></td>
	<td><?PHP echo $row['numero']; ?></td>
	
	<td><form method="POST" action="supprimeruser.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['email']; ?>" name="email">
	</form>
	</td>
	<td><form method="POST" action="traiter.php">
	<input type="submit" name="modifier" value="modifier">
	<input type="hidden" value="<?PHP echo $row['email']; ?>" name="email">
	</form>
	</td>
	
	</tr>
	<?PHP
}
?>
</table>
