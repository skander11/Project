<?PHP
include_once "../config.php";


class userf {

	function ajouteruser($user ){
		$sql="INSERT INTO users (idc,nom,prenom,email,sexe,adr,numero,dNaiss) values (:idc,:email,:nom,:prenom,:dNaiss,:adr,:sexe,:numero)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        
        $idc=$user->getIdc();
        $nom=$user->getEmail();
        $prenom=$user->getNom();
        $email=$user->getPrenom();
        $numero=$user->getSexe();
        $adr=$user->getadr();
        $sexe=$user->getdNaiss();
        $dNaiss=$user->getnumero();

		$req->bindValue(':idc',$idc);
		$req->bindValue(':email',$email);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':sexe',$sexe);
		$req->bindValue(':adr',$adr);
		$req->bindValue(':dNaiss',$dNaiss);
		$req->bindValue(':numero',$numero);

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficheruser(){
		//$sql="SElECT * From User e inner join formationphp.User a on e.idc= a.idc";
		$sql="SElECT * From users";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerUser($email){
		$sql="DELETE FROM users where email= :email";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':email',$email);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierUser($email,$adr){
		$sql="UPDATE users SET adr=$adr WHERE email=:email";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
 		
        }
		
	}
function recuperer($email){
$sql="SElECT * From users WHERE email=$email ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	}
}
?>