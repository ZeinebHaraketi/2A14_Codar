<?php
include "afficher_commande.php";

$prod = new commandeC();

if (isset($_POST['id'])) {
    $prod->supprimercommande($_POST['id']);
    header('Location:C:/xampp1/htdocs//back/afficher_commande.php');
} else {
    echo 'Erreur : try again';
    echo $_POST['id'];

}
?>