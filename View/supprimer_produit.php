<?php
include "ajouter_produit.php";

$prod = new produitC();

if (isset($_POST['id_produit'])) {
    $prod->supprimerproduit($_POST['id_produit']);
    header('Location:../View/afficher_produit.php');
    
} else {
    echo 'Erreur : try again';
    echo $_POST['id_produit'];

}
?>