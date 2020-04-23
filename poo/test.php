<?php 
include("produit.class.php");
include("etudiant.class.php");
// instancier des objets de classe Produit
$hp=new Produit("hp dv 7",4000,12,"HP");

$hp->afficher();
$hp->en_stock();

$dell=new Produit("dell  lat 6",5000,10);

$dell->afficher();
$dell->en_stock();

echo "<hr>";
$savio=new Etudiant("Milandou","Savio",24);

$savio->afficher();
$savio->majorite();
$amrani=new Etudiant("Amrani","Saad");
// echo "AGE EST ".$amrani->age;
// $amrani->nom="Amrani";
// $amrani->prenom="Mehdi";
 // $amrani->age="test";
 $amrani->setAge("test");
$amrani->afficher();
$amrani->majorite();

?>