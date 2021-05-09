<?php
include "afficher_offre.php";

$off = new offreC();

if (isset($_POST['id'])) {
    $off->supprimeroffre($_POST['id']);
    header('Location:afficher_offre.php');
} else {
    echo 'Erreur : try again';
    echo $_POST['id'];

}
?>