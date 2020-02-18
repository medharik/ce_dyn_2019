<?php
//var_dump($_FILES['chemin']);

require ("functions.php");
$chemin=uploader($_FILES['chemin']);
extract($_POST);
store_produit($libelle,$prix,$qtestock,$chemin,$categorie_id);
// redirection vers index
header("location:index_produit.php");
?>