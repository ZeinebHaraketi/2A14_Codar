<?php
session_start();
session_destroy();
echo 'Vous êtes déconnecté.<a href="../../index.php"> Retour a l accueil?</a> <a href="login.php">Se connecter ?</a>';
?>



