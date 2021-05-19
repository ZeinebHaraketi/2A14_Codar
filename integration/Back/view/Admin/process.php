<?php
session_start();
$host="localhost";
$username="root";
$password="";
$database="fagito";
$message="";

try
{
  require_once"connexion.php";
  $conn=se_connecter();

  if(isset($_POST["login"]))
  {
    if(empty($_POST["username"]) || empty($_POST["password"]))
    {
  echo '<script type="text/javascript">alert("Champs vide !");</script>';

      
    }
    else 
    {
      $query="SELECT * FROM admin WHERE username=:username AND password= :password";
      $statement=$conn->prepare($query);
      $statement->execute(
        array(
          'username' => $_POST["username"],
          'password' => $_POST["password"]
        )
      );
      $count=$statement->rowcount();
      if($count > 0)
      {
        $_SESSION["username"] = $_POST["username"];
        header("location:index.php");
      }
      else
      {
  echo '<script type="text/javascript">alert("Username or Password incorrect !");</script> ';
  header("location:login.php");

      }
    }
  }
}

catch (PDOException $error)
{
  $message = $error->getMessage();
}
?>