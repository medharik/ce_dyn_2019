<?php 
require("functions.php");
extract($_POST);//$libelle, $prix,..,$id
$destination="";
//var_dump($_FILES['chemin']);
//die();
if(isset($_FILES['chemin']) && !empty($_FILES['chemin']['name'])){

    $destination=uploader($_FILES['chemin']);
}

update_categorie($nom,$destination,$id);

header("location:index.php?op=ok");

?>