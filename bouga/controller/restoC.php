<?php
include "C:/xampp/htdocs/bouga/config.php" ;
require_once "C:/xampp/htdocs/bouga/model/resto.php" ;

  class restoC 
  {
    function ajouterresto($resto)
    {
     
          $sql = "INSERT INTO resto(nom, email, adresse) 
              VALUES (:nom,:email,:adresse)";
          $db = config::getConnexion();
          try {
              $query = $db->prepare($sql);
  
              $query->execute([
                  'nom' => $resto->getNom(),
                  'email' => $resto->getEmail(),
                  'adresse' => $resto->getadresse()
                 
                  
  
              ]);
              ?>
              <script> alert("resto crée"); </script>
              <?PHP
          } catch (Exception $e) {
              echo 'Erreur: ' . $e->getMessage();
      }
  
         
      catch (Exception $e)
      {
          die('Erreur: '.$e->getMessage());
      }
    }
    function afficherresto()
    {
      $sql="SELECT * FROM resto";
      $db = config::getConnexion();
      try
      {
          $list=$db->query($sql);
          return $list;
      }
      catch (Exception $e)
      {
          die('Erreur: '.$e->getMessage());
      }
  
    }
  
    function getrestos(int $id)
    {
        
        $pdo = config::getConnexion();
        try {

            $query = $pdo->prepare('SELECT * FROM resto where id = :id');

            $query->execute(['id'=>$id]);
            $result = $query->fetch();
            return $result ;
        }catch(Exeption $e)
        {
            die('Erreur: '.$e->getMessage());
        }
        
    }
    function modifierrestos(resto $user , int $id)
    {
        
        $pdo = config::getConnexion();
        try {

            $query = $pdo->prepare('UPDATE resto SET 
            Nom = :nom, 
       
            Email = :email,
            Adresse = :adresse,
            
            WHERE Id = :id  ');

            $query->execute(['nom' => $user->getNom(),
         
            'email' => $user->getEmail(),
            'adresse' => $user->getAdresse(),
           
            'id' => $id]);
        }catch(Exeption $e)
        {
            die('Erreur: '.$e->getMessage());
        }
        
    }
    function supprimerresto($id)
  {


   $sql = "DELETE FROM resto WHERE id = :id";
  $db = config::getConnexion();
  $req = $db->prepare($sql);
  $req->bindValue(':id', $id);
  try {
      $req->execute();

  } 
  catch (Exception $e) {
      die('Erreur: ' . $e->getMessage());
  }
  }

  function recupererresto($id){
    $sql="SELECT * from resto where id =$id";
    $db = config::getConnexion();
    try{
        $query=$db->prepare($sql);
        $query->execute();

        $user=$query->fetch();
        return $user;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}
 function modifierresto($resto,$id)
 {
 try {
    $db = config::getConnexion();
    $query = $db->prepare(
        'UPDATE resto SET 
     
            nom = :nom,
            email = :email,
     
            adresse = :adresse
             
        WHERE id = :id'
    );
    $query->execute([
        
        'nom' => $resto->getNom(),
        'email' => $resto->getEmail(),
        
        'adresse' => $resto->getadresse(),
         
        'id' => $id
    ]);
    echo $query->rowCount()." records UPDATED successfully <br>";
    } catch (PDOException $e) {
    $e->getMessage();
}
}
  }


?>