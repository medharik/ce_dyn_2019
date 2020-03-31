<?php 

//extraire les data 
// calcul 
$prix=$_GET['prix'];
$qte=$_GET['qte'];

$tht=$prix*$qte;
echo "THT est $tht DHS";
?>