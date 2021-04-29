<?PHP
	include "../controller/CommentaireC.php";

	$commentaireC=new CommentaireC();
	$listeUsers=$commentaireC->afficherCommentaire();

?>

<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Afficher Liste Blogs </title>
    </head>
    <body>
		<button><a href="connexion.php">Ajouter Un Commentaire</a></button>
		<hr>
		<table border=1 align = 'center'>
			<tr>
				<th>Id</th>
				<th>Nom</th>
				<th>Message</th>
				<th></th>
			</tr>

			<?PHP
				foreach($listeUsers as $user){
			?>
				<tr>
					<td><?PHP echo $user['idC']; ?></td>
					<td><?PHP echo $user['NomC']; ?></td>
					<td><?PHP echo $user['messageC']; ?></td>
					<td>
						<form method="POST" action="supprimerCommentaire.php">
						<input type="submit" name="supprimer" value="supprimer">
						<input type="hidden" value=<?PHP echo $user['idC']; ?> name="idC">
						</form>
					</td>
				</tr>
			<?PHP
				}
			?>
		</table>
	</body>
</html>
