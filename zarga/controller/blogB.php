<?PHP
	include "../config.php";
	require_once '../model/blog.php';

	class blogB {
		
		function ajouterblog($blog){
			$sql="INSERT INTO blog (TitreB,DescriptionB,ImageB ) 
			VALUES (:TitreB,:DescriptionB,:ImageB )";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([

					'TitreB' => $blog->getTitreB(),
					'DescriptionB' => $blog->getDescriptionB(),
					'ImageB' => $blog->getImageB()
					 
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function afficherblog(){
			
			$sql="SELECT * FROM blog";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimerblog($idB){
			$sql="DELETE FROM blog WHERE idB= :idB";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':idB',$idB);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifierblog($blog, $idB){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE blog SET 
						idB = :idB, 
						TitreB = :TitreB,
						DescriptionB = :DescriptionB,
						ImageB = :ImageB
			
					WHERE idB  = :idB'	
				);
				$query->execute([
					
					'TitreB' => $blog->getTitreB(),
					'DescriptionB' => $blog->getDescriptionB(),			
					'ImageB' => $blog->getImageB(),			 
					'idB' => $idB
				]);
				echo $query->rowCount()." records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererblog($idB){
			$sql="SELECT * from blog where idB=$idB";
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

		function recupererblog1($idB){
			$sql="SELECT * from blog where idB=$idB";
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


		function trierblog()
		{
			$sql = "SELECT * from blog ORDER BY TitreB DESC";
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

		function affichage_par_id($idB){
			$sql="SELECT DescriptionB FROM blog WHERE idB= :idB";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':idB',$idB);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}


		
	}

?>