<?php
include "afficher_blog.php";
$blog = new blogB();

if (isset($_POST['idB'])) {
    $blog->supprimerblog($_POST['idB']);
    header('Location:../back/afficher_blog.php');
} else {
    echo 'Erreur : try again';
    echo $_POST['idB'];

}
?>