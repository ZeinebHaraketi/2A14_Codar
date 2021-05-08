<?PHP
	include "../config.php";
	require_once '../model/utilisateur.php';

class utilisateurC
{
 public function afficherutilisateur()
    {  $sql= " SELECT * FROM utilisateur" ; 
      $db = config ::getConnexion();
      try{
        $listeutilisateur = $db->query($sql);
        return $listeutilisateur ;

      } catch (Exception $e) {die ('erreur : '.$e->getMessage());}
    
     }

    public function ajouterutilisateur($utilisateur)
    {
        $sql="INSERT INTO utilisateur (nomutilisateur,prenomutilisateur,eadresseutilisateur,dateutilisateur,loginutilisateur,mdputilisateur)
        values (:nomutilisateur,:prenomutilisateur,:eadresseutilisateur,:dateutilisateur,:loginutilisateur,:mdputilisateur)";
        $db=config::getConnexion();

        try
        {
            $query=$db->prepare($sql);
            $query->execute([
                'nomutilisateur'=>$utilisateur->getnomutilisateur(),
                'prenomutilisateur'=>$utilisateur->getprenomutilisateur(),
                'eadresseutilisateur'=>$utilisateur->geteadresseutilisateur(),
				  'dateutilisateur'=>$utilisateur->getdateutilisateur(),
				    'loginutilisateur'=>$utilisateur->getloginutilisateur(),
				'mdputilisateur'=>$utilisateur->getmdputilisateur(),
					
					  
		]);
        }
        catch(Exeption $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }
   function supprimerutilisateur($idutilisateur)
    {
			$sql="DELETE FROM utilisateur WHERE idutilisateur=:idutilisateur";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':idutilisateur',$idutilisateur);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
	}
	function modifierutilisateur($utilisateur, $idutilisateur){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE utilisateur SET 
						nomutilisateur = :nomutilisateur, 
						prenomutilisateur = :prenomutilisateur,
						
						
						eadresseutilisateur = :eadresseutilisateur,
						dateutilisateur = :dateutilisateur, 
						loginutilisateur = :loginutilisateur,
						mdputilisateur = :mdputilisateur
						
					WHERE idutilisateur = :idutilisateur'
				);
				
				$query->bindValue(':nomutilisateur',$utilisateur->getnomutilisateur());
				$query->bindValue(':prenomutilisateur',$utilisateur->getprenomutilisateur());
								$query->bindValue(':eadresseutilisateur',$utilisateur->geteadresseutilisateur());
				$query->bindValue(':dateutilisateur',$utilisateur->getdateutilisateur());

				$query->bindValue(':loginutilisateur',$utilisateur->getloginutilisateur());
				$query->bindValue(':mdputilisateur',$utilisateur->getmdputilisateur());
				$query->bindValue(':idutilisateur',$idutilisateur);
				$query->execute();
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}


        function recupererutilisateur($idutilisateur){
			$sql="SELECT * from utilisateur where idutilisateur=$idutilisateur";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$utilisateur=$query->fetch();
				return $utilisateur;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
	
    public function afficherutilisateurtri()
    {  $sql= " SELECT * FROM utilisateur order by idutilisateur DESC " ; 
      $db = config ::getConnexion();
      try{
        $listeutilisateur = $db->query($sql);
        return $listeutilisateur ;

      } catch (Exception $e) {die ('erreur : '.$e->getMessage());}
    
     }	 
 	 


}
?>