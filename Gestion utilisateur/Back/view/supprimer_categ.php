<?php
//include "ajouter_categ.php";
include_once '../controller/categorieC.php';

$prod = new categorieC();

if (isset($_POST['id_categ'])) {
    $prod->supprimerproduit($_POST['id_categ']);
    header('Location:afficher_categ.php');
} else {
    echo 'Erreur : try again';
    echo $_POST['id_categ'];

}


?>