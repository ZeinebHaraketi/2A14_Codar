<?php
    include "../controller/utilisateurC.php";
    include_once '../model/utilisateur.php';

    $utilisateurC = new utilisateurC();
    $error = "";

    if (
       isset($_POST["nomutilisateur"]) && 
        isset($_POST["prenomutilisateur"]) &&
        isset($_POST["dateutilisateur"]) && 
		 isset($_POST["eadresseutilisateur"]) && 
        isset($_POST["loginutilisateur"]) && 
        isset($_POST["mdputilisateur"])
    ){
        if (
             !empty($_POST["nomutilisateur"]) && 
            !empty($_POST["prenomutilisateur"]) &&
            !empty($_POST["dateutilisateur"]) && 
			!empty($_POST["eadresseutilisateur"]) && 
            !empty($_POST["loginutilisateur"]) && 
            !empty($_POST["mdputilisateur"])
        ) {
            if( preg_match ( " /^[a-zA-Z]{2,}$/ " , $_POST['nomutilisateur'] )==1 && preg_match (" /^[a-zA-Z]{2,}$/ ", $_POST['prenomutilisateur'] )==1 && preg_match ( ' /^.+@.+\.[a-z]{2,}$/ ' , $_POST['loginutilisateur'] )==1){
            $utilisateur = new utilisateur(
                $_POST['nomutilisateur'],
                $_POST['prenomutilisateur'], 
                $_POST['dateutilisateur'],
				$_POST['eadresseutilisateur'],
                $_POST['loginutilisateur'],
                $_POST['mdputilisateur']
            );

            $utilisateurC->modifierutilisateur($utilisateur, $_GET['idutilisateur']);
           // header('Location:afficherPatient.php');
        }else {
            echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";
            if($count!=0){echo 'L email existe deja '; echo "<br>";}
            if(preg_match ( " /^[a-zA-Z]{2,}$/ " , $_POST['nomutilisateur'] )==0){echo 'Le nom doit contenir que des lettres '; echo "<br>";}
            if(preg_match ( " /^[a-zA-Z]{2,}$/ " , $_POST['prenomutilisateur'] )==0){echo 'Le prenom doit contenir que des lettres '; echo "<br>";}
            if(preg_match ( ' /^.+@.+\.[a-zA-Z]{2,}$/ '  , $_POST['loginutilisateur'] )==0){echo 'L email est incorrect '; echo "<br>";} 
          

        }
    }
        else
            $error = "Missing information";
    }

?>

<?php
    session_start();
    if(!isset($_SESSION["idutilisateur"])){
   var_dump($_SESSION);
        exit(); 
    }
?>

<html>
	<head>
		<title>Modifier utilisateur</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<a href="index.php">Retour</a>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
		
		<?php
			if (isset($_GET['idutilisateur'])){
				$utilisateur = $utilisateurC->recupererutilisateur($_GET['idutilisateur']);
				
		?>
		<form action="" method="POST">
            <table align="center">
                <tr>
                    <td rowspan='7' colspan='1'></td>
                    <td>
                        <label for="nomutilisateur">Nom
                        </label>
                    </td>
                    <td><input type="text" name="nomutilisateur" id="nomutilisateur" maxlength="20" value = "<?php echo $utilisateur['nomutilisateur']; ?>"></td>
                </tr>
                <tr>
                    <td>
                        <label for="prenomutilisateur">Prénom
                        </label>
                    </td>
                    <td><input type="text" name="prenomutilisateur" id="prenomutilisateur" maxlength="20" value = "<?php echo $utilisateur['prenomutilisateur']; ?>"></td>
                </tr>
           
				<tr>
                    <td>
                        <label for="dateutilisateur">Date de naissance
                        </label>
                    </td>
                    <td>
                        <input type="date" name="dateutilisateur" id="dateutilisateur"  value = "<?php echo $utilisateur['dateutilisateur']; ?>">
                    </td>
                </tr>
				     
                <tr>
                    <td>
                        <label for="eadresseutilisateur">Adresse 
                        </label>
                    </td>
                    <td>
                        <input type="text" name="eadresseutilisateur" id="eadresseutilisateur"  value = "<?php echo $utilisateur['eadresseutilisateur']; ?>">
                    </td>
                </tr>
				<tr>
                    <td>
                        <label for="loginutilisateur">E-mail
                        </label>
                    </td>
                    <td>
                        <input type="text" name="loginutilisateur" id="loginutilisateur"  value = "<?php echo $utilisateur['loginutilisateur']; ?>">
                    </td>
                </tr>
				<tr>
                    <td>
                        <label for="pass">Mot de passe
                        </label>
                    </td>
                    <td>
                        <input type="password" name="mdputilisateur" id="mdputilisateur"  value = "<?php echo $utilisateur['mdputilisateur']; ?>">
                    </td>
                </tr>
                
                
                
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Modifier" name = "modifer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
		<?php
		}
		?>
	</body>
</html>


