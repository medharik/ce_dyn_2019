<?php 
include("../model.php");
function store($nom,$chemin="images/icon.png"){
$link=connecter_db();
$requete=sprintf("insert into categorie(nom,chemin) values('%s','%s')", $nom,$chemin);
mysqli_query($link,$requete) or die("Erreur d'ajout de la categorie ".mysqli_error($link));
}

//modifier

function update($nom,$chemin,$id){
    $link=connecter_db();
    if(isset($chemin) && !empty($chemin)){
        $requete=sprintf("update categorie set nom='%s' ,
         chemin='%s' where id=%d",$nom,$chemin,$id) ;
        
    }else{

        $requete=sprintf("update categorie set nom='%s'  where id=%d",$nom,$id) ;
    }
    mysqli_query($link,$requete) or die("Erreur de modification de la categorie $nom ".mysqli_error($link));
    }
