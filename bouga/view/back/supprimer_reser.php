<?php
include "afficher-reser.php";

$prod = new reserC();

if (isset($_POST['idr'])) {
    $prod->supprimerreser($_POST['idr']);
    header('Location:../view/back/afficher-reser.php');
} else {
    echo 'Erreur : try again';
    echo $_POST['idr'];

}
?>