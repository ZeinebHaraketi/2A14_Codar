<?php
include "../controller/commandeC.php";

$prod = new commandeC();

if (isset($_POST['id'])) {
    $prod->supprimercommande($_POST['id']);
    header('Location:afficher_commande.php');
} else {
    echo 'Erreur : try again';
    echo $_POST['id'];

}
?>