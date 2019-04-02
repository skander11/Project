<?PHP
include_once "../config.php";

class ClientF {

	function ajouterclient($client ){
		$sql="INSERT INTO  clients (idc,nom,prenom,email,sexe,adr,dNaiss,pts,numero) values (:dNaiss, :nom,:prenom,:idc,:email,:sexe,:adr,:pts,:numero)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $idc=$client->getIdc();
        $nom=$client->getNom();
        $prenom=$client->getPrenom();
        $email=$client->getEmail();
        $sexe=$client->getSexe();
        $adr=$client->getadr();
        $dNaiss=$client->getdNaiss();
        $pts=$client->getpts();
        $numero=$client->getnumero();
		$req->bindValue(':idc',$idc);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':email',$email);
		$req->bindValue(':sexe',$sexe);
		$req->bindValue(':adr',$adr);
		$req->bindValue(':dNaiss',$dNaiss);
		$req->bindValue(':pts',$pts);
		$req->bindValue(':numero',$numero);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherclients(){
		//$sql="SElECT * From client e inner join formationphp.client a on e.idc= a.idc";
		$sql="SElECT * From clients";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerclient($email){
		$sql="DELETE FROM clients where email= :email";
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
	function modifierclient($client,$idc){
		$sql="UPDATE client SET idc=:idcn, nom=:nom,prenom=:prenom,email=:email,sexe=:sexe,adr=:adr,pts=:pts,numero=:numero,dNaiss=:dNaiss WHERE idc=:idc";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idcn=$client->getIdc();
        $nom=$client->getNom();
        $prenom=$client->getPrenom();
        $email=$client->getEmail();
        $sexe=$client->getSexe();
        $adr=$client->getadr();
        $pts=$client->getpts();
        $dNaiss=$client->getdNaiss();
        $numero=$client->getnumero();
		$datas = array(':idcn'=>$idcn, ':idc'=>$idc, ':nom'=>$nom,':prenom'=>$prenom,':email'=>$email,':sexe'=>$sexe,':adr'=>$adr,':pts'=>$pts,':numero'=>$numero,':dNaiss'=>$dNaiss);
		$req->bindValue(':idcn',$idcn);
		$req->bindValue(':idc',$idc);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':sexe',$sexe);
		$req->bindValue(':adr',$adr);
		$req->bindValue(':email',$email);
		$req->bindValue(':pts',$pts);
		$req->bindValue(':numero',$numero);
		$req->bindValue(':dNaiss',$dNaiss);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}

}
?>