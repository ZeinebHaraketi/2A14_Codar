<?php
include "afficher_livraison.php";

$prod = new livraisonC();

if (isset($_POST['id'])) {
    $prod->supprimerlivraison($_POST['id']);
    header('Location:../back/afficher_livraison.php');
} else {
    echo 'Erreur : try again';
    echo $_POST['id'];

}
?>