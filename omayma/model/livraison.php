<?php
    class livraison{
        private ?int $id = null;
        private ?string $nom= null;
      
        private ?string $prenom = null;
        private ?string $num = null;
        private ?string $adresse= null;
        private ?string $mail = null;
        
        function __construct(string $nom,  string $prenom, string $num, string $adresse, string $mail)
        {
            $this->nom= $nom;           
            $this->prenom = $prenom ;
            $this->num = $num ;
            $this->adresse = $adresse ;
            $this->mail = $mail ;
         
        }
        function  getId() :int
        {
            return $this->id ;
        }
        function  getNom() :string
        {
            return $this->nom;
        }
       
        function  getPrenom() :string
        {
            return $this->prenom ;
        }
        function  getNum():string
        {
            return $this->num ;
        }
      
        function  getAdresse():string
        {
            return $this->adresse ;
        }
      
        function  getMail():string
        {
            return $this->mail ;
        }

    }

?>