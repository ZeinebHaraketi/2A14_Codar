<?php
if(isset($_POST["idB"]))
{
	$idB=$_POST["idB"];

	if(!empty($idB) && is_numeric($idB))
	{
	   require_once"connexion.php";
       $conn=se_connecter();
       $query="delete from blog where idB=$idB";
       $conn->exec($query);
       header("location:gestionBlogs.php");
     
	}
}
?>