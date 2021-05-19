<?php 
require_once 'phpqrcode/qrlib.php';

$path ='images/';
$file = $path.uniqid().".png";
$text ="https://sindahamdi136.wixsite.com/fagito";



QRcode ::png($text,$file);
echo "<center><img src ='".$file."'></center>";

?>