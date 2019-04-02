<?PHP
include "../entities/Clients.php";
include "../core/ClientF.php";

if (isset($_POST['email']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['idc']) and isset($_POST['adr'])and isset($_POST['sexe'])and isset($_POST['numero'])and isset($_POST['dNaiss'])and isset($_POST['pts']) ){
$client1=new client($_POST['email'],$_POST['nom'],$_POST['prenom'],$_POST['idc'],$_POST['adr'],$_POST['sexe'],$_POST['numero'],$_POST['dNaiss'],$_POST['pts']);
//Partie2

var_dump($client1);
//}

//Partie3
$Client1F=new ClientF();
$Client1F->ajouterclient($client1);
header('Location: afficherclient.php');
}	
/*}else{
	echo "vérifier les champs";
}
//*/

?>