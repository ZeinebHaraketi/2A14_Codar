<?PHP
	include "C:/xampp/htdocs/sindafinal/config.php";
	require_once 'C:/xampp/htdocs/sindafinal/model/carte.php';

	class carteC {
		
		function ajoutercarte($carte){
			$sql="INSERT INTO carte (nom,prenom,ddn,typecarte,tel) 
			VALUES (:nom,:prenom,:ddn,:typecarte,:tel)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'nom' => $carte->getnom(),
					'prenom' => $carte->getprenom(),
					'ddn' => $carte->getddn(),
                    'typecarte' => $carte->gettypecarte(),
                    'tel' => $carte->gettel(),
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function affichercarte(){
			
			$sql="SELECT * FROM carte";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimercarte($idc){
			$sql="DELETE FROM carte WHERE idc= :idc";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':idc',$idc);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifiercarte($carte, $idc){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE carte SET 
						nom = :nom, 
						prenom = :prenom,
						ddn = :ddn,
						typecarte = :typecarte,
						tel = :tel
						 
					WHERE idc = :idc'
				);
				$query->execute([
					'nom' => $carte->getNom(),
					'prenom' => $carte->getprenom(),
					'ddn' => $carte->getddn(),
					 'typecarte' => $carte->gettypecarte(),
					 'tel' => $carte->gettel(),

					'idc' => $idc
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recuperercarte($idc){
			$sql="SELECT * from carte where idc=$idc";
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

		function recuperercarte1($idc){
			$sql="SELECT * from carte where idc=$idc";
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
		}}


?>