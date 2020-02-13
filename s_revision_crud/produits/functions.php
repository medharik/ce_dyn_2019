<?php 
include("../model.php");

//pour produit
// ajout
function store($libelle,$prix=0,$qtestock=0,$chemin="images/icon.png"){
$link=connecter_db();
$requete=sprintf("insert into produit(libelle,prix,qtestock,chemin) values('%s',%f,%f,'%s')", $libelle,$prix,$qtestock,$chemin);
mysqli_query($link,$requete) or die("Erreur d'ajout ".mysqli_error($link));
}
//modifier
function update($libelle,$prix,$qtestock,$chemin,$id){
    $link=connecter_db();
    if(isset($chemin) && !empty($chemin)){
        $requete=sprintf("update produit set libelle='%s' , prix=%f , qtestock=%f, chemin='%s' where id=%d",$libelle,$prix,$qtestock,$chemin,$id) ;
        
    }else{

        $requete=sprintf("update produit set libelle='%s' , prix=%f , qtestock=%f where id=%d",$libelle,$prix,$qtestock,$id) ;
    }
    mysqli_query($link,$requete) or die("Erreur de modification du produit $libelle ".mysqli_error($link));
    }

