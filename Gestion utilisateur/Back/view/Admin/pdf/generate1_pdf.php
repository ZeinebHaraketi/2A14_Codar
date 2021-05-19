<?php
//include connection file
include_once("connection.php");
include_once('libs/fpdf.php');
 
class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->image('favicon.png',34,60);
    $this->SetFont('Arial','',20);
    // Move to the right
    $this->Cell(55);
    // Title
    $this->Cell(100,10,'Participants List',1,0,'C');
    // Line break
    $this->Ln(20);
}
 
// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(10,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
 
$db = new dbObj();
$connString =  $db->getConnstring();
$display_heading = array('id'=> 'ID', 'nom'=> 'nom', 'email'=> 'email','nomEvent'=> 'nomEvent','tel'=> 'tel',);
 
$result = mysqli_query($connString, "SELECT id, nom, email, nomEvent, tel FROM participant") or die("database error:". mysqli_error($connString));
$header = mysqli_query($connString, "SHOW columns FROM participant");
 
$pdf = new PDF();
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',7);
foreach($header as $heading) {
$pdf->Cell(33,12,$display_heading[$heading['Field']],1);
}
foreach($result as $row) {
$pdf->Ln();
foreach($row as $column)
$pdf->Cell(33,10,$column,1);
}
$pdf->Output();
?>
