<?PHP
include "../core/ClientF.php";
$clientf=new ClientF();
if (isset($_POST['email'])){
	$clientf->supprimerclient($_POST['email']);
	header('Location: afficherclient.php');
}

?>