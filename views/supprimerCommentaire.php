<?PHP
	include "../controller/CommentaireC.php";

	$commentaireC=new CommentaireC();
	
	if (isset($_POST["idC"])){
		$commentaireC->supprimerCommentaire($_POST["idC"]);
		header('Location:afficherCommentaire.php');
	}

?>