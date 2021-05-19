<?php
include "../controller/carteC.php";
$car = new carteC();

if (isset($_POST['idc'])) {
    $car->supprimercarte($_POST['idc']);
    header('Location:afficher_carte.php');
} else {
    echo 'Erreur : try again';
    echo $_POST['idc'];

}
?>