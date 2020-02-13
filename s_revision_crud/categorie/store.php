<?php
//var_dump($_FILES['chemin']);

require ("functions.php");
$destination=uploader($_FILES['chemin']);
extract($_POST);//$libelle,$prix
// $libelle=$_POST['libelle'];
// $prix=$_POST['prix'];
// ajouter 
store($nom,$chemin);
// redirection vers index
header("location:index.php");
?>