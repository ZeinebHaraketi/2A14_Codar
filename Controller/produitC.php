<?php
include "../config.php";
require_once "../Model/produit.php";


class produitC
{
  function ajouterproduit($produit)
  {
    /*$sql="INSERT INTO produit (nom_produit, categorie, prix, quantite) 
    VALUES (:nom_produit,:categorie,:prix, :quantite)";
    $db = config::getConnexion();
    
    try{
        $req=$db->prepare($sql);
        $nom_produit= $produit->getNom();
        $categorie= $produit->getCategorie();
        $prix= $produit->getPrix();
        $quantite= $produit->getQuantite();


        $req->bindValue(':nom_produit',$nom_produit);
        $req->bindValue(':categorie',$categorie);
        $req->bindValue(':prix',$prix);
        $req->bindValue(':quantite',$quantite);
    
        $req->execute();
        if ($req->execute()){
            echo "OK";
            header ('Location:./View/afficher_produit.php');
        }
        else echo "NOK";
        */
        $sql = "INSERT INTO produit(nom_produit, categorie, prix, quantite) 
			VALUES (:nom_produit,:categorie,:prix, :quantite)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);

            $query->execute([
                'nom_produit' => $produit->getNom(),
                'categorie' => $produit->getCategorie(),
                'prix' => $produit->getPrix(),
                'quantite' => $produit->getQuantite()
               
                

            ]);
            ?>
            <script> alert("produit crée"); </script>
            <?PHP
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
    }

       
    catch (Exception $e)
    {
        die('Erreur: '.$e->getMessage());
    }
  }

  function afficherproduit()
  {
    $sql="SELECT * FROM produit";
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

  /*function modifierproduit($id_produit,$nom_produit,$categorie,$prix,$quantite)
  {
    $sql= "UPDATE produit SET nom_produit='$nom_produit', categorie='$categorie',prix='$prix',quantite='$quantite' WHERE id_produit='$id_produit' ";
    $db = config::getConnexion();
       
        try
        {
            $db->query($sql);
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
  }*/
  
  function supprimerproduit($id_produit)
  {
 
  $sql = "DELETE FROM produit WHERE id_produit = :id_produit";
  $db = config::getConnexion();
  $req = $db->prepare($sql);
  $req->bindValue(':id_produit', $id_produit);
  try {
      $req->execute();
      echo "Supprimees avec succees ! ";

  } 
  catch (Exception $e) {
      die('Erreur: ' . $e->getMessage());
  }
 }

function recupererproduit($id_produit){
    $sql="SELECT * from produit where id_produit =$id_produit";
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
/*
function rechercherproduit($id_produit)
{
    $sql="SELECT * from produit where id_produit=$id_produit";
    $db = config::getConnexion();
    try{
    $req=$db->query($sql);
    return $req;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}*/
/*function rechercherproduit($nom_produit) {
    $sql = "SELECT * from produit where nom_produit=:nom_produit";
    $db = config::getConnexion();
    try {
        $query = $db->prepare($sql);
        $query->execute([
            'nom_produit' => $produit->getNom(),
        ]);
        $result = $query->fetchAll();
        return $result;
    }
    catch (PDOException $e) {
        $e->getMessage();
    }


}*/


/*function modifierproduit($produit,$id_produit)
    {
        
            try {
                $db = config::getConnexion();
                $sql= "UPDATE produit SET nom_produit =:nom_produit,categorie =:categorie, prix =:prix WHERE id_produit =".$_GET['id_produit'] ;
                
                $query = $db->prepare($sql);
                //  $query->bindValue(':id',1);
                $query->bindValue(':nom_produit', $produit->getNom());
                $query->bindValue(':prix', $produit->getPrix());
                $query->bindValue(':categorie',$produit->getCategorie());
                $query->bindValue(':quantite', $produit->getQuantite());
                
                //var_dump($produit->getPrix());
                //die;
                $query->execute();
                //echo $query->rowCount() . " records UPDATED successfully <br>";
            } catch (PDOException $e) {
                $e->getMessage();
            }
        
    }*/




/*function modifierproduit($produit,$id_produit)
  {
    $sql= "UPDATE produit SET nom_produit=: 'nom_produit', categorie=:categorie,prix=:prix,quantite=:quantite WHERE id_produit=:$id_produit' ";
    $db = config::getConnexion();
       
        try
        {
            $db->query($sql);
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }


  
    }*/
 function modifierproduit($produit,$id_produit)
 {
    try
    {
        $db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE produit SET 
						nom_produit = :nom_produit, 
						categorie = :categorie,
						prix = :prix,
						quantite = :quantite
						
					WHERE id_produit = :id_produit'
				);
				$query->execute([
					'nom_produit' => $produit->getNom(),
					'categorie' => $produit->getCategorie(),
					'prix' => $produit->getPrix(),
					'quantite' => $produit->getQuantite(),
					
					'id_produit' => $id_produit
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
    } 
    catch (PDOException $e)
     {
        $e->getMessage();
    }
 }

 function trierproduit()
 {
     $sql = "SELECT * from produit ORDER BY prix DESC";
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


  function recherche($search_value)
        {
            $sql="SELECT * FROM produit where id_produit like '$search_value' or nom_produit like '%$search_value%' or prix like '%$search_value%' or quantite like '%$search_value%' or id_produit like '%$search_value%'  ";
    
            //global $db;
            $db =Config::getConnexion();
    
            try{
                $result=$db->query($sql);
    
                return $result;
    
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }



// Pagination

 function AfficherproduitPaginer($page, $perPage)
    {
        $start = ($page > 1) ? ($page * $perPage) - $perPage : 0;
        $sql = "SELECT * FROM produit LIMIT {$start},{$perPage}";
        $db = config::getConnexion();
        try 
        {
            $liste = $db->prepare($sql);
            $liste->execute();
            $liste = $liste->fetchAll(PDO::FETCH_ASSOC);
            return $liste;
        } 
        catch (Exception $e) 
        {
            die('Erreur: ' . $e->getMessage());
        }
    }
    
    
    
    function calcTotalRows($perPage)
    {
        $sql = "SELECT SQL_CALC_FOUND_ROWS * FROM produit";
        $db = config::getConnexion();
        try {
    
            $liste = $db->query($sql);
            $total = $db->query("SELECT FOUND_ROWS() as total")->fetch()['total'];
            $pages = ceil($total / $perPage);
            return $pages;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
}

?>