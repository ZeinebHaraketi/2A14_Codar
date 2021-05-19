<?PHP
	class carte{
		private  $idc;
		private  $nom = null;
		private  $prenom = null;
		private  $ddn = null;
		private  $typecarte = null;
        private  $tel = null;
		
		function __construct( $nom, $prenom, $ddn, $typecarte, $tel){
			
			$this->nom=$nom;
			$this->prenom=$prenom;
			$this->ddn=$ddn;
			$this->typecarte=$typecarte;
            $this->tel=$tel;
		}
		
		function getidc(){
			return $this->idc;
		}
		function getNom(){
			return $this->nom;
		}
		function getprenom() {
			return $this->prenom;
		}
		function getddn(){
			return $this->ddn;
		}
		function gettypecarte(){
			return $this->typecarte;
		}
        function gettel(){
			return $this->tel;
		}

		function setNom($nom){
			$this->nom=$nom;
		}
		function setprenom($prenom){
			$this->prenom;
		}
		function setddn($ddn){
			$this->ddn=$ddn;
		}
        function settypecarte($typecarte){
			$this->typecarte=$typecarte;
		}
        function settel($tel){
			$this->tel=$tel;
		}
		
	}
?>