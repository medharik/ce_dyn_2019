<?php
require ("functions.php");
//recuperer les datas
extract($_POST);//$libelle,$prix
// $libelle=$_POST['libelle'];
// $prix=$_POST['prix'];
// ajouter 
store($libelle,$prix,$qtestock);
// redirection vers index
header("location:index.php");
?>