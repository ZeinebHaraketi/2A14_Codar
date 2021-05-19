<?php
include "../config.php";
require_once "../model/produit.php";


class produitC
{
  function ajouterproduit($produit)
  {
    
        $sql = "INSERT INTO produit(idC,nom_produit, categorie, prix, quantite, image) 
			VALUES (:idC,:nom_produit,:categorie,:prix, :quantite, :image)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);

            $query->execute([
                'idC' => $produit->getID_C(),
                'nom_produit' => $produit->getNom(),
                'categorie' => $produit->getCategorie(),
                'prix' => $produit->getPrix(),
                'quantite' => $produit->getQuantite(),
				
				'image' => $produit->getImage()
               
                

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
	  
    //$sql="SELECT * FROM produit";
	$sql="SELECT 
	p.nom_produit as nomP,
	p.prix,
	c.nom_categ as nomC,
	c.descriptionc
	FROM 
	produit as p
	INNER JOIN 
	categorie as c
	ON (p.idC = c.id_categ)";
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


  
  function supprimerproduit($id_produit)
  {
 
  $sql = "DELETE FROM produit WHERE id_produit = :id_produit";
  $db = config::getConnexion();
  $req = $db->prepare($sql);
  $req->bindValue(':id_produit', $id_produit);
  try {
      $req->execute();
      echo "Supprimer avec succees ! ";

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




 function modifierproduit($produit,$id_produit)
 {
    try
    {
        $db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE produit SET 
                        idC   = :idC,
						nom_produit = :nom_produit, 
						categorie = :categorie,
						prix = :prix,
						quantite = :quantite,
						image = : image
						
						
					WHERE id_produit = :id_produit'
				);
				$query->execute([
                    'idC' => $produit-> getID_C(),
					'nom_produit' => $produit->getNom(),
					'categorie' => $produit->getCategorie(),
					'prix' => $produit->getPrix(),
					'quantite' => $produit->getQuantite(),
					'image' => $produit->getImage(),
					
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
			//or idC like '$search_value'
			//id_produit like '$search_value'  or
            $sql="SELECT * FROM produit where  nom_produit like '%$search_value%' or prix like '%$search_value%' or quantite like '%$search_value%' or id_produit like '%$search_value%'  ";
    
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