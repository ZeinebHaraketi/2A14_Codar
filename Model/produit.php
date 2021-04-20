<?php

class produit
{
    private $id_produit;
    private $nom_produit;
    private $categorie;
    private $prix;
    private $quantite;

    // Le Constructeur
    function __construct($nom,$cat,$prix,$quat)
    {
      $this->nom_produit= $nom;
      $this->categorie= $cat;
      $this->prix= $prix;
      $this->quantite= $quat;
    }

    // Les Getters
    function getID(){
        return $this->id_produit;
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
    
     // Les Setters
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
}





?>