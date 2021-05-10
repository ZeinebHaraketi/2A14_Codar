<?php
include "afficher_resto.php";

$prod = new restoC();

if (isset($_POST['id'])) {
    $prod->supprimerresto($_POST['id']);
    header('Location:../back/afficher_resto.php');
} else {
    echo 'Erreur : try again';
    echo $_POST['id'];

}
?>