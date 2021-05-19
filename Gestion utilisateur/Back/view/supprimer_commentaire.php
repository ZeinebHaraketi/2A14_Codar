<?php
include "afficher_commentaire.php";

$commentaire = new commentaireC();

if (isset($_POST['idC'])) {
    $commentaire->supprimercommentaire($_POST['idC']);
    header('Location:../back/afficher_commentaire.php');
} else {
    echo 'Erreur : try again';
    echo $_POST['idC'];

}
?>