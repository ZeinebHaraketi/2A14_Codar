<?php

class produit
{
    private $id_produit;
    private $idC;
    private $nom_produit;
    private $categorie;
    private $prix;
    private $quantite;
	private $image;

    // Le Constructeur
    function __construct($idC,$nom,$cat,$prix,$quat,$img)
    {
      $this->idC= $idC;
      $this->nom_produit= $nom;
      $this->categorie= $cat;
      $this->prix= $prix;
      $this->quantite= $quat;
	  $this->image= $img;
    }

    // Les Getters
    function getID(){
        return $this->id_produit;
    } 
    function getID_C(){
        return $this->idC;
    } 
    function getNom(){
        return $this->nom_produit;
    } 
    function getCategorie(){
        return $this->categorie;
    }
    function getPrix(){
        return $this->prix;
    } 
    function getQuantite(){
        return $this->quantite;
    } 
	function getImage(){
        return $this->image;
    } 
    
     // Les Setters
    function setIDC($idc){
        $this->idC= $idc;
    }
    function setNom($nom){
        $this->nom_produit= $nom;
    }
    function setCategorie($cat){
        $this->categorie= $cat;
    }
    function setPrix($prix){
        $this->prix= $prix;
    }
    function setQuantite($quant){
        $this->quantite= $quant;
    }
	function setImage($img){
        $this->image= $img;
    }
}





?>