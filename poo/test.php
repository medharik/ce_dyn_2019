<?php 
include("produit.class.php");
// instancier des objets de classe Produit
$hp=new Produit();
$hp->libelle="hp dv 6";
$hp->prix=9000;
$hp->qte=90;
$hp->marque="HP";
$hp->afficher();
$hp->en_stock();

$dell=new Produit();
$dell->libelle="dell  6";
$dell->prix=10000;
$dell->qte=0;
$dell->marque="DELL";
$dell->afficher();
$dell->en_stock();
?>