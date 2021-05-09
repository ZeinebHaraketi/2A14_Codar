<?php
include 'MPDF57/mpdf.php';


ob_start();
include '../View/pdf_produit.php';
$content = ob_get_clean(); 
$mpdf = new mPDF();
$mpdf->SetDisplayMode('fullpage');
$mpdf->WriteHTML($content);
$mpdf->Output('result.pdf');




?>