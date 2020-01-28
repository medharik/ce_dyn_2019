<?php 
function connecter_db(){
    $link=mysqli_connect("localhost","root","","dbrevision2020") or die("erreur de connexion bd");
 return $link;
}



function ajouter($nom,$email,$sexe,$specialite){
$link=connecter_db();
$sql= sprintf( "insert into  contact (nom,email,sexe,specialite) values ('%s','%s','%s','%s')",$nom,$email,$sexe,$specialite);
mysqli_query($link,$sql) or die("erreur d'ajout ".mysqli_error($link));
}

function supprimer($id){
    $link=connecter_db();
    $sql= sprintf( "delete from contact where id=%d",$id);
    mysqli_query($link,$sql) or die("erreur de suppression ".mysqli_error($link));
   
}

function modifier($nom,$email,$sexe,$specialite,$id){
    $link=connecter_db();
    $sql= sprintf( "update contact set nom='%s', email='%s', sexe='%s', specialite='%s' where id=%d",$nom,$email,$sexe,$specialite,$id);
    mysqli_query($link,$sql) or die("erreur de modif ".mysqli_error($link));
    
}
function recuperer_tous(){
    $link=connecter_db();
    $sql= sprintf( "select * from contact");
  $resultat=  mysqli_query($link,$sql) or die("erreur  de recup ".mysqli_error($link));
    return $resultat;

}


?>