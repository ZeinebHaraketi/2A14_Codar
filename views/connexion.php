<?php
    include_once '../Model/Commentaire.php';
    include_once '../Controller/CommentaireC.php';

    $error = "";

    // create user
    $commentaire = null;

    // create an instance of the controller
    $commentaireC = new CommentaireC();
    if (
        isset($_POST["nomB"]) && 
        isset($_POST["emailB"]) &&
        isset($_POST["messageB"]) 
    ) {
        if (
            !empty($_POST["nomB"]) && 
            !empty($_POST["emailB"]) && 
            !empty($_POST["messageB"]) 
        ) {
            $blog = new Commentaire(
                $_POST['nomB'],
                $_POST['emailB'], 
                $_POST['messageB']
            );
            $commentaireC->ajouterCommentaire($commentaire);
            header('Location:afficherCommentaire.php');
        }
        else
            $error = "Missing information";
    }

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commentaire Display</title>
</head>
    <body>
        <button><a href="afficherCommentaire.php">Retour à la liste</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
        
        <form action="" method="POST">
            <table border="1" align="center">

                <tr>
                    <td>
                        <label for="nomB">Nom:
                        </label>
                    </td>
                    <td><input type="text" name="nomB" id="nomB" maxlength="20"></td>
                </tr>

                
                <tr>
                    <td>
                        <label for="emailB">Adresse mail:
                        </label>
                    </td>
                    <td>
                        <input type="emailB" name="emailB" id="emailB">
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="messageB">Message:
                        </label>
                    </td>
                    <td><input type="messageB" name="messageB" id="messageB" ></td>
                </tr>
               
              
                
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Envoyer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>