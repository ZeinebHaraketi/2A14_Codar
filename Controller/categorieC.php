<?php
include "../config.php";
require_once "../Model/categorie.php";

class categorieC
{
    function ajoutercategorie($categorie)
    {
        $sql = "INSERT INTO categorie(nom_categ,descriptionc) 
        VALUES (:nom_categ,:descriptionc)";
    $db = config::getConnexion();
    try {
        $query = $db->prepare($sql);

        $query->execute([
            'nom_categ' => $categorie->getNomC(),
            'descriptionc' => $categorie->getDescription()
            
           
            

        ]);
        ?>
        <script> alert("categorie crée"); </script>
        <?PHP
    } 
    catch (Exception $e) {
    echo 'Erreur: ' . $e->getMessage();
                         }
                         catch (Exception $e)
                         {
                             die('Erreur: '.$e->getMessage());
                         }
 }

 function affichercateg()
 {
    $sql="SELECT * FROM categorie";
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

 function supprimerproduit($id_categ)
 {
    $sql = "DELETE FROM categorie WHERE id_categ = :id_categ";
    $db = config::getConnexion();
    $req = $db->prepare($sql);
    $req->bindValue(':id_categ', $id_categ);
    try {
        $req->execute();
  
    } 
    catch (Exception $e) {
        die('Erreur: ' . $e->getMessage());
    }
 }

 function recuperercategorie($id_categ)
 {
    $sql="SELECT * from categorie where id_categ =$id_categ";
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
  function modifiercategorie($categorie,$id_categ)
    {
        
            try {
                $db = config::getConnexion();
                $sql= "UPDATE categorie SET nom_categ=:nom_categ,descriptionc=:descriptionc WHERE id_categ =".$_GET['id_categ'] ;
                
                $query = $db->prepare($sql);
                //  $query->bindValue(':id',1);
                $query->bindValue(':nom_categ', $categorie->getNomC());
                $query->bindValue(':descriptionc', $categorie->getDescription());
                
                
                //var_dump($produit->getPrix());
                //die;
                $query->execute();
                //echo $query->rowCount() . " records UPDATED successfully <br>";
            } 
            catch (PDOException $e) {
                $e->getMessage();
                                   }
        
    }

}

?>