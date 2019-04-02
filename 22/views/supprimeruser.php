<?PHP
include "../core/userf.php";
$userf=new userf();
if (isset($_POST['email'])){
	$userf->supprimeruser($_POST['email']);
	header('Location: afficheruser.php');
}

?>