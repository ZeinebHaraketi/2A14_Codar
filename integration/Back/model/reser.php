<?php
    class reser{
        private  $idr ;
        private  $nom = null;
        private  $dat = null;
        private  $nbp = null;
        private  $nresto = null;
        private  $email = null;
     
    
        
        function __construct( $nom, $dat, $nbp, $nresto, $email)
        {
            $this->nom = $nom ;  
            $this->dat = $dat ;
            $this->nbp = $nbp ;
            $this->nresto = $nresto ;            
            $this->email = $email ;
           
         
        }
        function  getIdr()
        {
            return $this->idr;
        }
        function  getNom()
        {
            return $this->nom ;
        }
        function  getdate()
        {
            return $this->dat ;
        }
        function  getNbp()
        {
            return $this->nbp ;
        }
        function  getNresto()
        {
            return $this->nresto ;
        }




       
        function  getEmail() 
        {
            return $this->email ;
        }
      
        function setNom(string $nom)
        {
            $this->nom = $nom;
        }
        function setdate(string $date)
        {
            $this->date = $dat;
        }
        function setNbp(string $nbp)
        {
            $this->nbp = $nbp;
        }
        function setNresto(string $nresto)
        {
            $this->nresto = $nresto;
        }
      
        function setEmail(string $email)
        {
            $this->email = $email;
        }
      
       
    }


?>