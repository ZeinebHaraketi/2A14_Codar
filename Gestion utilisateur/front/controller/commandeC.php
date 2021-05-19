<?PHP
	include "C:/xampp1/htdocs/omayma/config.php";
	require_once 'C:/xampp1/htdocs/omayma/model/commande.php';

	class commandeC {
		
		function recherche($search_value)
        {
            $sql="SELECT * FROM commande where id like '$search_value' or description like '$search_value' or nom like '%$search_value%' or prix like '%$search_value%'   ";
    
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
		function triercommande()
 {
     $sql = "SELECT * from commande ORDER BY prix ASC";
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

		
		function ajoutercommande($commande){
			$sql="INSERT INTO commande (image,description ,nom,prix) 
			VALUES (:image,:description,:nom,:prix )";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'image' => $commande->getImage(),
					'description' => $commande->getDescription(),
					'nom' => $commande->getNom(),
					'prix' => $commande->getPrix(),

				
					 
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function affichercommande(){
			
			$sql="SELECT * FROM commande";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimercommande($id){
			$sql="DELETE FROM commande WHERE id= :id";
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
		function modifiercommande($commande, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE commande SET 
						
						image = :image,
						description = :description,
                        nom = :nom,
                        prix = :prix
						 
					WHERE id = :id'
				);
				$query->execute([
					
					'image' => $commande->getImage(),
					'description' => $commande->getdescription(),
					'nom' => $commande->getNom(),
					'prix' => $commande->getPrix(),
					 
					'id' => $id
				]);
				echo $query->rowCount()." records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
 
		function recuperercommande($id)
        {
			$sql="SELECT * from commande where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$user = $query->fetch();
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
	}

?>