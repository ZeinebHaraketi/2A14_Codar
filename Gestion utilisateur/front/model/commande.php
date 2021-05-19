<?php
    class commande{
        private  $id = null;
        private $image;
        private $description= null;
      
        private  $nom = null;
        private $prix = null;
    
        
        function __construct($image, string $description,  string $nom, string $prix)
        {
          
            $this->image=$image;
            $this->description= $description;           
            $this->nom = $nom ;
            $this->prix = $prix ;
         
        }
       
        function  getId() :int
        {
            return $this->id ;
        }
        function  getImage()
        {
            return $this->image ;
        }
        function  getDescription() :string
        {
            return $this->description;
        }
       
        function  getNom() :string
        {
            return $this->nom ;
        }
        function  getPrix() :string
        {
            return $this->prix ;
        }
      
        
      
        
       
    }


?>