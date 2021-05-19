<?PHP
	class commentaire{
		private  $idC = null;
		private  $NomC = null;
		private  $messageC = null;

		function __construct( $NomC, $messageC){
			

			$this->NomC=$NomC;
			$this->messageC=$messageC;
			
		}
		
		function getidC(){
			return $this->idC;
		}
		function getNomC(){
			return $this->NomC;
		}
		function getmessageC() {
			return $this->messageC;
		}
		

		function setNomC($NomC){
			$this->NomC=$NomC;
		}
		function setidC($idC){
			$this->idC=$idC;
		}
		function setmessageC($messageC){
			$this->messageC=$messageC;
		}
		
	}
?>