<?php
//var_dump($_FILES['chemin']);

require ("functions.php");
$destination=uploader($_FIILES['chemin']);
extract($_POST);//$libelle,$prix
// $libelle=$_POST['libelle'];
// $prix=$_POST['prix'];
// ajouter 
store($libelle,$prix,$qtestock,$destination);
// redirection vers index
header("location:index.php");
?>