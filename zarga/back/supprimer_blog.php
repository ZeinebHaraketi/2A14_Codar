
<?php
/*include "afficher_blog.php";
$blog = new blogB();

if (isset($_POST['idB'])) {
    $blog->supprimerblog($_POST['idB']);
    header('Location:../back/afficher_blog.php');
} else {
    echo 'Erreur : try again';
    echo $_POST['idB'];

}
?>  */

if(isset($_POST["idB"]))
{
	$idB=$_POST["idB"];

	if(!empty($idB) && is_numeric($idB))
	{
	   require_once"connexion.php";
       $conn=se_connecter();
       $query="delete from blog where idB=$idB";
       $conn->exec($query);
       header("location:afficher_blog.php");
     
	}
}
?>