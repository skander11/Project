<?PHP
include "../entities/user.php";
include "../core/userf.php";

if (isset($_POST['idc']) and  isset($_POST['prenom']) and isset($_POST['email'])and isset($_POST['nom'])and isset($_POST['dNaiss'])and isset($_POST['adr'])and isset($_POST['numero'])and isset($_POST['sexe'])){
$user1=new user($_POST['idc'],$_POST['prenom'],$_POST['email'],$_POST['nom'],$_POST['dNaiss'],$_POST['adr'],$_POST['numero'],$_POST['sexe']);
//Partie2

var_dump($user1);
//}

//Partie3
$user1f=new userf();
$user1f->ajouteruser($user1);
header('Location: afficheruser.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>