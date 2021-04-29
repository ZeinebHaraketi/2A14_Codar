<?php
    require "../controller/BlogB.php";
    include_once '../Model/Blog.php';

	$blogB = new BlogB();
	$error = "";

	if (
        isset($_POST["nomB"]) && 
        isset($_POST["emailB"]) &&
        isset($_POST["messageB"])
    ){
		if (
            !empty($_POST["nomB"]) && 
            !empty($_POST["emailB"]) && 
            !empty($_POST["messageB"])

        ) {
            $user = new Blog(
                $_POST['nomB'],
                $_POST['emailB'], 
                $_POST['messageB']
            );
            
            $blogB->modifierBlog($user, $_GET['idB']);
            header('Location:../View/afficherBlog.php');
        }
        else
            $error = "Missing information";
	}

?>
<!DOCTYPE html> 

<html>
	<head>
		<title>Modifier Blog</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <button><a href="afficherBlog.php">Retour à la liste</a></button>
        
	</head>
	<body>
		
        
        <div id="error">
            <?php echo $error; ?>
        </div>
		
        <?php
			if (isset($_GET['idB'])){
				$user = $blogB->recupererBlog1($_GET['idB']); 
				
		?>
		<form action="" method="POST">
            <table align="center">
                <tr>
        
                    <td>
                        <label for="nomB">Nom:
                        </label>
                    </td>
                    <td><input type="text" name="nomB" id="nomB" maxlength="20" value = "<?php echo $user->nomB; ?>"></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="emailB">Adresse mail:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="emailB" id="emailB" pattern=".+@gmail.com|.+@esprit.tn" value = "<?php echo $user->emailB; ?>">
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <label for="messageB">Message:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="messageB" id="messageB" value = "<?php echo $user->messageB; ?>">
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