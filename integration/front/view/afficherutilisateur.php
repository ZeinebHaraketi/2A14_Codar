<?PHP
include "../controller/utilisateurC.php";

	$utilisateurC=new utilisateurC();
	$listeutilisateur=$utilisateurC->afficherutilisateur(); 
	/*recherche*/
	$bdd=new PDO('mysql:host=localhost;dbname=fagito', 'root', '',);
	$listelivreur= $bdd->query('SELECT * FROM utilisateur ORDER BY idutilisateur');
	if (isset ($_GET['s']) AND !empty($_GET['s'])){
      $recherche =	htmlspecialchars($_GET['s']);
	  $listeutilisateur = $bdd->query('SELECT idutilisateur,nomutilisateur,prenomutilisateur,eadresseutilisateur,dateutilisateur,loginutilisateur,mdputilisateur FROM utilisateur WHERE eadresseutilisateur LIKE "%' .$recherche .'%" ORDER BY idutilisateur DESC '  ); 
	}
	/*Tri*/
	if (isset($_POST['ASC'])) {
        $utilisateurC=new utilisateurC();
        $listeutilisateur = $utilisateurC->afficherutilisateurtri();
    }


?>

<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Afficher Liste utilisateur </title>
    </head>
    <body>
		<a href="ajouterutilisateur.php">Ajouter un utilisateur</a>
		<hr> <table border="1">
			
			<?PHP
				foreach($listeutilisateur as $utilisateur){
			?>
				<tr>
					 <td><?PHP echo $utilisateur['idutilisateur']; ?></td>
					<td><?PHP echo $utilisateur['nomutilisateur']; ?></td>
					<td><?PHP echo $utilisateur['prenomutilisateur']; ?></td>
					<td><?PHP echo $utilisateur['eadresseutilisateur']; ?></td>
					<td><?PHP echo $utilisateur['dateutilisateur']; ?></td>
					<td><?PHP echo $utilisateur['loginutilisateur']; ?></td>
					<td><?PHP echo $utilisateur['mdputilisateur']; ?></td>
			      </tr>
					<td>
						<form method="POST" action="supprimerutilisateur.php">
						<input type="submit" name="supprimer" value="supprimer">
						<input type="hidden" value=<?PHP echo $utilisateur['idutilisateur']; ?> name="idutilisateur">
						</form>
					</td>
					<td>
						<a href="modifierutilisateur.php?idutilisateur=<?PHP echo $utilisateur['idutilisateur']; ?>"> Modifier </a>
					</td>
				</tr>
			<?PHP
				}
			?>
								  <!--tri--> 
					  <form action="afficherutilisateur.php" method="post">
			<input type="submit" name="ASC" value="Ascending">
			
			</form>
					 <!--recherche-->
					              <form method="GET">
     <input type="search" name="s" placeholder="Recherche utilisateur">
     <input type="submit" name="envoyer" >
     </form>
       
	   <section>
	   <?PHP
	   if($listeutilisateur->rowCount()>0)
	   { while($utilisateur =$listeutilisateur ->fetch()){
		   ?>
		   <?PHP
	   } }else {
		   ?>
		   <p>Utilisateur introuvable </p>
		   <?PHP
	   }
	   ?>
	   </section>
		</table>


	</body>
	</html>