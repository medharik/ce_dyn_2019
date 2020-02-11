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

function update($libelle,$prix,$qtestock,$chemin,$id){
    $link=connecter_db();
    if(isset($chemin) && !empty($chemin)){
        $requete=sprintf("update produit set libelle='%s' , prix=%f , qtestock=%f, chemin='%s' where id=%d",$libelle,$prix,$qtestock,$chemin,$id) ;
        
    }else{

        $requete=sprintf("update produit set libelle='%s' , prix=%f , qtestock=%f where id=%d",$libelle,$prix,$qtestock,$id) ;
    }
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


function uploader($infos){
define('MAX_SIZE',1000000);
$autorise=['jpg','jpeg','gif','pdf'];
$tmp=$infos['tmp_name'];
$nom_original=$infos['name'];
$new_nom=  md5(date('Ymdhis')."_".rand(0,99999)).$nom_original;
// $size=$infos['size'];// en octect
 $size=filesize($tmp);// en octect
 $path_info=pathinfo($nom_original);
 $ext=$path_info['extension'];
 if($size > MAX_SIZE){
     die("fichier volumineux ");
 }
 if(!in_array($ext,$autorise)){
 die("type de fichier non autorise");
 }
$destination="images/$new_nom";
move_uploaded_file($tmp,$destination);
//recuperer les datas
return $destination;


}


