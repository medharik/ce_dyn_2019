<?php 
//connecter db 
 function connecter_db(){
  $link= mysqli_connect("localhost","root","","db2020revision") 
   or die("Erreur de connexion a la base de donnees ");
   return $link;
 }

// ajout
function store($libelle,$prix=0,$qtestock=0,$chemin="images/icon.png"){
$link=connecter_db();
$requete=sprintf("insert into produit(libelle,prix,qtestock,chemin) values('%s',%f,%f,'%s')", $libelle,$prix,$qtestock,$chemin);
mysqli_query($link,$requete) or die("Erreur d'ajout ".mysqli_error($link));
}

// supprimer

function delete($id){
// connexion db
$link=connecter_db();
//preparer la requete
$requete=sprintf("delete from produit where id=%d",$id);
// executer la requete
mysqli_query($link,$requete) or die("Erreur de suppression ".mysqli_error($link));

}


//modifier

function update($libelle,$prix,$qtestock,$id){
    $link=connecter_db();
    $requete=sprintf("update produit set libelle='%s' , prix=%f , qtestock=%f where id=%d",$libelle,$prix,$qtestock,$id) ;
    mysqli_query($link,$requete) or die("Erreur de modification du produit $libelle ".mysqli_error($link));
    }
// lecture  des ressources 
function all(){
    $link=connecter_db();
    $requete="select * from produit" ;
 $resultat=   mysqli_query($link,$requete) or die("Erreur de selection des produits ".mysqli_error($link));
return $resultat;    
}
// consultation d'une ressource par id 

function find($id){
    $link=connecter_db();
    $requete=sprintf("select * from produit where id=%d",$id) ;
 $resultat=   mysqli_query($link,$requete) or die("Erreur de selection du produit , id=$id ".mysqli_error($link));
$ligne=mysqli_fetch_assoc($resultat);
 return $ligne;    
}





