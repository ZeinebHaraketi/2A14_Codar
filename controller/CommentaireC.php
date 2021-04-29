<?PHP
	include "../config.php";
	require_once '../Model/Commentaire.php';

	class CommentaireC {
		
		function ajouterCommentaire($Commentaire){
			$sql="INSERT INTO commentaire (NomC, messageC)
			VALUES (:NomC,:messageC)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'NomC' => $Commentaire->getNomC(),
					'messageC' => $Commentaire->getmsgC()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function afficherCommentaire(){
			
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

		function supprimerCommentaire($idC){
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
		function modifierCommentaire($Commentaire, $idC){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE commentaire SET 
						NomC = :NomC, 
						messageC = :messageC,

					WHERE idC = :idC'
				);
				$query->execute([
					'NomC' => $Commentaire->getNomC(),
					'messageC' => $Commentaire->getmessageC(),
					'idC' => $idC
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererCommentaire($idC){
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

		function recupererCommentaire1($idC){
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