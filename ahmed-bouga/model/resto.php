<?php
    class resto{
        private ?int $id = null;
        private ?string $nom = null;
      
        private ?string $email = null;
        private ?string $adresse = null;
    
        
        function __construct(string $nom,  string $email, string $adresse)
        {
            $this->nom = $nom ;           
            $this->email = $email ;
            $this->adresse = $adresse ;
         
        }
        function  getId() :int
        {
            return $this->id ;
        }
        function  getNom() :string
        {
            return $this->nom ;
        }
       
        function  getEmail() :string
        {
            return $this->email ;
        }
        function  getadresse():string
        {
            return $this->adresse ;
        }
      
        function setNom(string $nom):void
        {
            $this->nom = $nom;
        }
      
        function setEmail(string $email):void
        {
            $this->email = $email;
        }
        function setadresse(string $adresse):void
        {
            $this->adresse = $adresse;
        }
       
    }


?>