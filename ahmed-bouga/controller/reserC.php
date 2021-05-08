<?php
include '../config.php' ;
require_once '../model/reser.php' ;

  class reserC 
  {
    function ajouterreser($reser)
    {
     
          $sql ="INSERT INTO reser (nom,dat,nbp,nresto,email) 
              VALUES (:nom,:dat,:nbp,:nresto,:email)";
          $db = config::getConnexion();
          try {
              $query = $db->prepare($sql);
  
              $query->execute([
                  'nom' => $reser->getNom(),
                  'dat' => $reser->getdate(),
                  'nbp' => $reser->getNbp(),
                  'nresto' => $reser->getNresto(),
                  'email' => $reser->getEmail(),
                  
                 
                  
  
              ]);
              
             
          } catch (Exception $e) {
              echo 'Erreur: ' . $e->getMessage();
      }
    }
  
    
    
    function afficherreser()
    {
      $sql="SELECT * FROM reser";
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
  
    function getreser(int $idr)
    {
        
        $pdo = config::getConnexion();
        try {

            $query = $pdo->prepare('SELECT * FROM reser where idr = :idr');

            $query->execute(['idr'=>$idr]);
            $result = $query->fetch();
            return $result ;
        }catch(Exeption $e)
        {
            die('Erreur: '.$e->getMessage());
        }
        
    }
    function modifierresers(reser $user , int $idr)
    {
        
        $pdo = config::getConnexion();
        try {

            $query = $pdo->prepare('UPDATE reser SET 
            Nom = :nom,
            date = :date,

            Nbp = :nbp,
            Nresto = :nresto,
            Email = :email,
        
            
            WHERE idr = :idr  ');

            $query->execute([  'nom' => $reser->getNom(),
            'date' => $reser->getdate(),
            'nbp' => $reser->getNbp(),
            'nresto' => $reser->getNresto(),
            'email' => $reser->getEmail(),
            
            'idr' => $idr]);
        }catch(Exeption $e)
        {
            die('Erreur: '.$e->getMessage());
        }
        
    }
    function supprimerreser($idr)
  {


   $sql = "DELETE FROM reser WHERE idr = :idr";
  $db = config::getConnexion();
  $req = $db->prepare($sql);
  $req->bindValue(':idr', $idr);
  try {
      $req->execute();

  } 
  catch (Exception $e) {
      die('Erreur: ' . $e->getMessage());
  }
  }

  function recupererreser($idr){
    $sql="SELECT * from reser where idr =$idr";
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
 function modifierreser($reser,$id)
 {
 try {
    $db = config::getConnexion();
    $query = $db->prepare(
        'UPDATE reser SET 
            id= :id, 
            Nom = :nom,
            date = :date,

            Nbp = :nbp,
            Nresto = :nresto,
            Email = :email,
        WHERE id = :id'
    );
    $query->execute([
        
        'nom' => $reser->getNom(),
        'date' => $reser->getdate(),
        'nbp' => $reser->getNbp(),
        'nresto' => $reser->getNresto(),
        'email' => $reser->getEmail(),
         
        'idr' => $idr
    ]);
    echo $query->rowCount()." records UPDATED successfully <br>";
} catch (PDOException $e) {
    $e->getMessage();
}
 }
 function trierreser()
 {
     $sql = "SELECT * from reser ORDER BY nbp DESC";
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





  }
?>