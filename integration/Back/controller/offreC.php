<?PHP
	include "../config.php";
	require_once '../model/offre.php';

	class offreC {
		
		function ajouteroffre($offre){
			$sql="INSERT INTO offre (description,type,datedeb,datefin,pourcentage) 
			VALUES (:description,:type,:datedeb,:datefin,:pourcentage)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
                    'description' => $offre->getdescription(),
					'type' => $offre->gettype(),
					'datedeb' => $offre->getdatedeb(),
					'datefin' => $offre->getdatefin(),
					'pourcentage' => $offre->getpourcentage()
					 
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function afficheroffre(){
			
			$sql="SELECT * FROM offre";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimeroffre($id){
			$sql="DELETE FROM offre WHERE id= :id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id',$id);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifieroffre($offre, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE offre SET 
						id = :id, 
						description =:description,
						type = :type,
						datedeb = :datedeb,
                        datefin = :datefin,
                        pourcentage = :pourcentage
						 
					WHERE id = :id'
				);
				$query->execute([
					'description' =>$offre->getdescription(),
					'type' => $offre->gettype(),
					'datedeb' => $offre->getdatedeb(),
					'datefin' => $offre->getdatefin(),
					'pourcentage' => $offre->getpourcentage(),
					 
					'id' => $id
				]);
				echo $query->rowCount()." records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupereroffre($id){
			$sql="SELECT * from offre where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$user=$query->fetch();
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function recupereroffre1($id){
			$sql="SELECT * from offre where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$user = $query->fetch(PDO::FETCH_OBJ);
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function trieroffre()
 {
     $sql = "SELECT * from offre ORDER BY pourcentage DESC";
     $db = config::getConnexion();
     try {
         $req = $db->query($sql);
         return $req;
     } 
     catch (Exception $e)
      {
         die('Erreur: ' . $e->getMessage());
     }
 }
 function trieroffre1()
 {
     $sql = "SELECT * from offre ORDER BY pourcentage ASC";
     $db = config::getConnexion();
     try {
         $req = $db->query($sql);
         return $req;
     } 
     catch (Exception $e)
      {
         die('Erreur: ' . $e->getMessage());
     }
 }
 function rechercherproduit($id_produit)
{
    $sql="SELECT * from produit where id_produit=$id_produit";
    $db = config::getConnexion();
    try{
    $req=$db->query($sql);
    return $req;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }


	
	
	function recherche($search_value)
	{
		$sql="SELECT * FROM offre where id like '$search_value' or description like '%$search_value%' or type like '%$search_value%' ";

		//global $db;
		$db =Config::getConnexion();

		try{
			$result=$db->query($sql);

			return $result;

		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}
	}


	}
}

?>