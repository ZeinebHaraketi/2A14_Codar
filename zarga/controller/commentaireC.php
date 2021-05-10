<?PHP
	include "../config.php";
	require_once '../model/commentaire.php';

	class commentaireC {
		
		function ajoutercommentaire($commentaire){
			$sql="INSERT INTO commentaire (NomC,messageC) 
			VALUES (:NomC,:messageC )";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([

					'NomC' => $commentaire->getNomC(),
					'messageC' => $commentaire->getmessageC()
					 
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function affichercommentaire(){
			
			$sql="SELECT * FROM commentaire";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimercommentaire($idC){
			$sql="DELETE FROM commentaire WHERE idC= :idC";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':idC',$idC);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifiercommentaire($commentaire, $idC){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE commentaire SET 
						idC = :idC, 
						NomC = :NomC,
						messageC = :messageC
			
					WHERE idC = :idC'	
				);
				$query->execute([
					
					'NomC' => $commentaire->getNomC(),
					'messageC' => $commentaire->getmessageC(),					 
					'idC' => $idC
				]);
				echo $query->rowCount()." records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recuperercommentaire($idC){
			$sql="SELECT * from commentaire where idC=$idC";
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

		function recuperercommentaire1($idC){
			$sql="SELECT * from commentaire where idC=$idC";
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
		
	}

?>