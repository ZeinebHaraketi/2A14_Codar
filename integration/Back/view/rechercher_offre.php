<?php
include "C:/xampp/htdocs/sindafinal/controller/offreC.php";
include_once 'C:/xampp/htdocs/sindafinal/Model/offre.php';
$offre=new offreC();

//$listeoffre=$offre->afficheroffre();
/*if (isset($_POST['type']))
{
	            $type=$_POST["type"];
				//$promotion1C=new promotionC();
				
				

*/
if (isset($_POST['type']))
{
  $type= $_POST["type"];
$listeoffre=$offre->rechercher_offre($type);

?>