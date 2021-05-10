<?PHP
	class blog{
		private  $idB  = null;
		private  $TitreB = null;
		private  $DescriptionB = null;
		private  $ImageB = null;

		function __construct( $TitreB, $DescriptionB ,$ImageB){
			

			$this->TitreB=$TitreB;
			$this->DescriptionB=$DescriptionB;
			$this->ImageB=$ImageB;	
			
		}
		
		function getidB(){
			return $this->idB;
		}
		function getTitreB(){
			return $this->TitreB;
		}
		function getDescriptionB() {
			return $this->DescriptionB;
		}

		function getImageB() {
			return $this->ImageB;
		}


		function setTitreB($TitreB){
			$this->TitreB=$TitreB;
		}
		function setidB($idB){
			$this->idB=$idB;
		}
		function setDescriptionB($DescriptionB){
			$this->DescriptionB=$DescriptionB;
		}
		function setImageB($ImageB){
			$this->ImageB=$ImageB;
		}
		
	}
?>