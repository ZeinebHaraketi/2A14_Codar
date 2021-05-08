<?php 

class utilisateur {

	private  $idutilisateur = null;
	private  $nomutilisateur = null;
	private  $prenomutilisateur= null;
	private  $eadresseutilisateur = null ;
	private  $dateutilisateur = null ;
	private  $loginutilisateur = null ;
	private  $mdputilisateur= null ;

function __construct( string $nomutilisateur, string $prenomutilisateur, string $eadresseutilisateur, string $dateutilisateur, string $loginutilisateur, string $mdputilisateur){
			
			$this->nomutilisateur=$nomutilisateur;
			$this->prenomutilisateur=$prenomutilisateur;
			$this->eadresseutilisateur=$eadresseutilisateur;
			$this->dateutilisateur=$dateutilisateur;
			$this->loginutilisateur=$loginutilisateur;
			$this->mdputilisateur=$mdputilisateur;
		
		}
		function getidutilisateur(): int{
			return $this->idutilisateur;
		}
		function getnomutilisateur(): string{
			return $this->nomutilisateur;
		}
		function getprenomutilisateur(): string{
			return $this->prenomutilisateur;
		}
		function geteadresseutilisateur(): string{
			return $this->eadresseutilisateur;
		}
		function getdateutilisateur(): string {
			return $this->dateutilisateur;
		}
		function getloginutilisateur(): string{
			return $this->loginutilisateur;
		}
		function getmdputilisateur(): string{
			return $this->mdputilisateur;
		}
		
    function setnomutilisateur(string $nomutilisateur): void{
			$this->nomutilisateur=$nomutilisateur;
		}
		function setprenomutilisateur(string $prenomutilisateur): void{
			$this->prenomutilisateur=$prenomutilisateur;
		}
		
		function seteadresseutilisateur(string $eadresseutilisateur): void{
			$this->eadresseutilisateur=$eadresseutilisateur;
		}
		function setdateutilisateur(string $dateutilisateur): void{
			$this->dateutilisateur=$dateutilisateur;
		}
		function setloginutilisateur(string $loginutilisateur): void{
			$this->loginutilisateur=$loginutilisateur;
		}
		function setmdputilisateur(string $mdputilisateur): void{
			$this->mdputilisateur=$mdputilisateur;
		}
}
?>