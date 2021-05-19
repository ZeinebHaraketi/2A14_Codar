
<!--

//require "../config.php";
//require_once "../Model/produit.php";
/*

require("../../View/assets/fpdf/fpdf.php");
header("Content-Type: application/octet-stream"); 

$file = $_GET["file"] . ".pdf"; 

header("Content-Disposition: attachment; filename=" . urlencode($file)); 
header("Content-Type: application/download"); 
header("Content-Description: File Transfer");			 
header("Content-Length: " . filesize($file)); 

flush(); // This doesn't really matter. 

$fp = fopen($file, "r"); 
while (!feof($fp)) { 
	echo fread($fp, 65536); 
	flush(); // This is essential for large downloads 
} 

fclose($fp); 
*/





<?php

require "../../config.php";
require_once "../../Model/produit.php";
// Connexion à la BDD (à personnaliser)
$link = mysqli_connect('localhost','root','','projet_web');
// Si base de données en UTF-8, utiliser la fonction utf8_decode pour tous les champs de texte à afficher

// extraction des données à afficher dans le sous-titre (nom du voyageur et dates de son voyage)
$requete = "SELECT * FROM produit";
$result = mysqli_query($link, $requete);
// tableau des résultats de la ligne > $data_voyageur['nom_champ']
$data = mysqli_fetch_array($result);
mysqli_free_result($result);

// Appel de la librairie FPDF
require("../../View/assets/fpdf/fpdf.php");

ob_start();
// Création de la class PDF
class PDF extends FPDF {
	// Header
	function Header() {
		// Logo : 8 >position à gauche du document (en mm), 2 >position en haut du document, 80 >largeur de l'image en mm). La hauteur est calculée automatiquement.
		//$this->Image('../../assets/Fagito.png',8,2);
		// Saut de ligne 20 mm
		$this->Ln(20);

		// Titre gras (B) police Helbetica de 11
		$this->SetFont('Helvetica','B',11);
		// fond de couleur gris (valeurs en RGB)
		$this->setFillColor(230,230,230);
 		// position du coin supérieur gauche par rapport à la marge gauche (mm)
		$this->SetX(70);
		// Texte : 60 >largeur ligne, 8 >hauteur ligne. Premier 0 >pas de bordure, 1 >retour à la ligneensuite, C >centrer texte, 1> couleur de fond ok	
		$this->Cell(60,8,'Gestion Produit',0,1,'C',1);
		// Saut de ligne 10 mm
		$this->Ln(10);		
	}
	// Footer
	function Footer() {
		// Positionnement à 1,5 cm du bas
		$this->SetY(-15);
		// Police Arial italique 8
		$this->SetFont('Helvetica','I',9);
		// Numéro de page, centré (C)
		$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
	}
}


// On active la classe une fois pour toutes les pages suivantes
// Format portrait (>P) ou paysage (>L), en mm (ou en points > pts), A4 (ou A5, etc.)
$pdf = new PDF('L','mm','A5');

// Nouvelle page A4 (incluant ici logo, titre et pied de page)
$pdf->AddPage();
// Polices par défaut : Helvetica taille 9
$pdf->SetFont('Helvetica','',9);
// Couleur par défaut : noir
$pdf->SetTextColor(0);
// Compteur de pages {nb}
$pdf->AliasNbPages();


// Sous-titre calées à gauche, texte gras (Bold), police de caractère 11
$pdf->SetFont('Helvetica','B',11);
// couleur de fond de la cellule : gris clair
$pdf->setFillColor(230,230,230);
// Cellule avec les données du sous-titre sur 2 lignes, pas de bordure mais couleur de fond grise
//$pdf->Cell(75,6,'DU '.$data_voyageur['date_deb'].' AU '.$data_voyageur['date_fin'],0,1,'L',1);		
//$pdf->Cell(75,6,strtoupper(utf8_decode($data_voyageur['prenom'].' '.$data_voyageur['nom'])),0,1,'L',1);				
//$pdf->Ln(10); // saut de ligne 10mm	



// Fonction en-tête des tableaux en 3 colonnes de largeurs variables
function entete_table($position_entete) {
	global $pdf;
	$pdf->SetDrawColor(183); // Couleur du fond RVB
	$pdf->SetFillColor(221); // Couleur des filets RVB
	$pdf->SetTextColor(0); // Couleur du texte noir
	$pdf->SetY($position_entete);
	// position de colonne 1 (10mm à gauche)	
	$pdf->SetX(10);
	$pdf->Cell(20,8,'Id_produit',1,0,'C',1);	// 60 >largeur colonne, 8 >hauteur colonne
	// position de la colonne 2 (70 = 10+60)
	$pdf->SetX(30); 
	$pdf->Cell(20,8,'Id_Categorie',1,0,'C',1);
	// position de la colonne 3 (130 = 70+60)
	$pdf->SetX(50); 
	$pdf->Cell(35,8,'nom_produit',1,0,'C',1);
	// position de la colonne 4 (190 = 130+60)
	$pdf->SetX(85); 
	$pdf->Cell(35,8,'Categorie',1,0,'C',1);
	// position de la colonne 5 (250 = 190+60)
	$pdf->SetX(120); 
	$pdf->Cell(20,8,'Prix',1,0,'C',1);
	// position de la colonne 6 (310 = 250+60)
	$pdf->SetX(140); 
	$pdf->Cell(20,8,'Quantite',1,0,'C',1);
	// position de la colonne 7 (370 = 310+60)
	$pdf->SetX(160); 
	$pdf->Cell(40,8,'Image',1,0,'C',1);

	$pdf->Ln(); // Retour à la ligne
}
// AFFICHAGE EN-TÊTE DU TABLEAU
// Position ordonnée de l'entête en valeur absolue par rapport au sommet de la page (60 mm)
$position_entete = 70;
// police des caractères
$pdf->SetFont('Helvetica','',9);
$pdf->SetTextColor(0);
// on affiche les en-têtes du tableau
entete_table($position_entete);


$position_detail = 78; // Position ordonnée = $position_entete+hauteur de la cellule d'en-tête (60+8)
$requete2 = "SELECT * FROM produit";
$result2 = mysqli_query($link, $requete2);
while ($dataP = mysqli_fetch_array($result2)) {
	// position abcisse de la colonne 3 (130 = 70+ 60)
	$pdf->SetY($position_detail);
	$pdf->SetX(10); 
	$pdf->MultiCell(20,8,$dataP['id_produit'],1,'C');
	
	// position abcisse de la colonne 3 (130 = 70+ 60)
	$pdf->SetY($position_detail);
	$pdf->SetX(30); 
	$pdf->MultiCell(20,8,$dataP['idC'],1,'C');
	
	// position abcisse de la colonne 1 (10mm du bord)
	$pdf->SetY($position_detail);
	$pdf->SetX(50);
	$pdf->MultiCell(35,8,utf8_decode($dataP['nom_produit']),1,'C');
	
    // position abcisse de la colonne 2 (70 = 10 + 60)	
	$pdf->SetY($position_detail);
	$pdf->SetX(85); 
	$pdf->MultiCell(35,8,utf8_decode($dataP['categorie']),1,'C');
	
	// position abcisse de la colonne 3 (130 = 70+ 60)
	$pdf->SetY($position_detail);
	$pdf->SetX(120); 
	$pdf->MultiCell(20,8,$dataP['prix'],1,'C');
	
	// position abcisse de la colonne 3 (130 = 70+ 60)
	$pdf->SetY($position_detail);
	$pdf->SetX(140); 
	$pdf->MultiCell(20,8,$dataP['quantite'],1,'C');
	
	
	// position abcisse de la colonne 2 (70 = 10 + 60)	
	$pdf->SetY($position_detail);
	$pdf->SetX(160); 
	$pdf->MultiCell(40,8,utf8_decode($dataP['image']),1,'C');
	
	

	// on incrémente la position ordonnée de la ligne suivante (+8mm = hauteur des cellules)	
	$position_detail += 8; 
}
mysqli_free_result($result2);

/*
// Nouvelle page PDF
$pdf->AddPage();
// Polices par défaut : Helvetica taille 9
$pdf->SetFont('Helvetica','',11);
// Couleur par défaut : noir
$pdf->SetTextColor(0);
// Compteur de pages {nb}
$pdf->AliasNbPages();
$pdf->Cell(500,20,utf8_decode('Plus rien à vous dire ;-)'));
*/

//$pdf->Output('produit.pdf','I'); // affichage à l'écran
// Ou export sur le serveur
$pdf->Output('I', '../produit.pdf');
ob_end_flush(); 

?>



