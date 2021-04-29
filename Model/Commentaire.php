<?PHP
	class Commentaire{
		private ?string $NomC = null;
		private ?string $msgC = null;

		// Constructeur 
		function __construct(string $NomC,string $msgC){
			
			$this->NomC=$NomC;
            $this->msgC=$msgC;
		}
		
        // Getters 

		function getNomC(): string{
			return $this->NomC;
		}

		function getmsgC(): string{
			return $this->msgC;
		}
	

        // Setters 

		function setNom(string $NomC): void{
			$this->NomC=$NomC;
		}

		function setMSG(string $msgB): void{
			$this->msgC=$msgC;
		}

	}
?>