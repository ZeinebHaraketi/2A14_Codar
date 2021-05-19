<?php
include "../config.php" ;
require_once "../model/livraison.php" ;

  class livraisonC 
  {
    function trierlivraison()
    {
        $sql = "SELECT * from livraisons ORDER BY prix DESC";
        $db = config::getConnexion();
        try {
            $req = $db->query($sql);
            return $req;
        } 
        catch (Exception $e)
         {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function ajouterlivraison($livraison)
    {
     
          $sql = "INSERT INTO livraison(nom, prenom, num, adresse, mail) 
              VALUES (:nom,:prenom,:num,:adresse,:mail)";
          $db = config::getConnexion();
          try {
              $query = $db->prepare($sql);
  
              $query->execute
              ([
                  'nom' => $livraison->getNom(),
                  'prenom' => $livraison->getPrenom(),
                  'num' => $livraison->getNum(),
                  'adresse' => $livraison->getAdresse(),
                  'mail' => $livraison->getMail(),
                
                 
                  
  
              ]);
              ?>
              <script> alert("livraison crée"); </script>
              <?PHP
          } catch (Exception $e) {
              echo 'Erreur: ' . $e->getMessage();
      }
  
         
      catch (Exception $e)
      {
          die('Erreur: '.$e->getMessage());
      }
    }
    function afficherlivraison()
    {
      $sql="SELECT * FROM livraison";
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
  
    function getlivraisons(int $id)
    {
        
        $pdo = config::getConnexion();
        try {

            $query = $pdo->prepare('SELECT * FROM livraison where id = :id');

            $query->execute(['id'=>$id]);
            $result = $query->fetch();
            return $result ;
        }catch(Exeption $e)
        {
            die('Erreur: '.$e->getMessage());
        }
        
    }
    function modifierlivraisons(livraison $user , int $id)
    {
        
        $pdo = config::getConnexion();
        try {

            $query = $pdo->prepare('UPDATE livraison SET 
            nom = :nom, 
       
            prenom = :prenom,
            num = :num,
            adresse = :adresse,
            mail = :mail,

            
            WHERE Id = :id  ');

            $query->execute(['nom' => $user->getNom(),
         
            'prenom' => $user->getPrenom(),
            'num' => $user->getNum(),
            'adresse' => $user->getAdresse(),
            'mail' => $user->getMail(),
           
            'id' => $id]);
        }catch(Exeption $e)
        {
            die('Erreur: '.$e->getMessage());
        }
        
    }
    function supprimerlivraison($id)
  {


   $sql = "DELETE FROM livraison WHERE id = :id";
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

  function recupererlivraison($id){
    $sql="SELECT * from livraison where id =$id";
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
 function modifierlivraison($livraison,$id)
 {
 try {
    $db = config::getConnexion();
    $query = $db->prepare(
        'UPDATE livraison SET 
            id= :id, 
            nom = :nom,
            prenom = :prenom,
     
            num = :num
            adresse = :adresse,
            mail = :mail,
             
        WHERE id = :id'
    );
    $query->execute([
        
        'nom' => $livraison->getNom(),
        'prenom' => $livraison->getPrenom(),
        
        'num' => $livraison->getNum(),
           
        'adresse' => $livraison->getAdresse(),
            
        'mail' => $livraison->getMail(),
         
         
        'id' => $id
    ]);
    echo $query->rowCount()." records UPDATED successfully <br>";
} catch (PDOException $e) {
    $e->getMessage();
}
}






  }
?>