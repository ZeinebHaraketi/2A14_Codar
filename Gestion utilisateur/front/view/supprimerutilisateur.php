<?php
	include "../controller/utilisateurC.php";

	$utilisateurC=new utilisateurC();
	
	if (isset($_POST["idutilisateur"])){
		$utilisateurC->supprimerutilisateur($_POST["idutilisateur"]);
		header('Location:afficherutilisateur.php');
	}

?>