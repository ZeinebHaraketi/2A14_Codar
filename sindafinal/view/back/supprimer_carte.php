<?php
include "afficher_carte.php";
$car = new carteC();

if (isset($_POST['idc'])) {
    $car->supprimercarte($_POST['idc']);
    header('Location:../back/afficher_carte.php');
} else {
    echo 'Erreur : try again';
    echo $_POST['idc'];

}
?>