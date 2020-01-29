<?php 
function connecter_db(){
    $link=mysqli_connect("localhost","root","","dbproduit") or die("erreur de connexion bd");
 return $link;
}
// CRUD : create read update and delete
function ajouter($libelle, $prix){
$link= connecter_db();
   $sql=sprintf("insert into prod (libelle,prix) values ('%s',%f)",$libelle,$prix) ;
mysqli_query($link,$sql) or die("erreur d'ajout ".mysqli_error($link));
}





?>