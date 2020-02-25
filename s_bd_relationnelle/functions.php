<?php
//connecter db 
 function connecter_db(){
  $link= mysqli_connect("localhost","root","","db2020revision") 
   or die("Erreur de connexion a la base de donnees ");
   return $link;
 }
// supprimer
function delete($id,$table="produit"){
// connexion db
$link=connecter_db();
//preparer la requete
$requete=sprintf("delete from $table where id=%d",$id);
// executer la requete
mysqli_query($link,$requete) or die("Erreur de suppression dans la table $table".mysqli_error($link));
}
function all($table="produit"){
    $link=connecter_db();
    $requete="select * from $table" ;
 $resultat=   mysqli_query($link,$requete) or die("Erreur de selection des $table(s) ".mysqli_error($link));
return $resultat;    
}

function allBy($condition,$table="produit"){
    $link=connecter_db();
    $requete="select * from $table where $condition" ;
 $resultat=   mysqli_query($link,$requete) or die("Erreur de selection des $table(s) ".mysqli_error($link));
return $resultat;    
}
// consultation d'une ressource par id 
function find($id,$table="produit"){
    $link=connecter_db();
    $requete=sprintf("select * from $table where id=%d",$id) ;
 $resultat=   mysqli_query($link,$requete) or die("Erreur de selection du produit , id=$id ".mysqli_error($link));
$ligne=mysqli_fetch_assoc($resultat);
 return $ligne;    
}


function uploader($infos){
define('MAX_SIZE',1000000);
$autorise=['jpg','jpeg','gif','pdf','png'];
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

//pour produit
// ajout
function store_produit($libelle,$prix=0,$qtestock=0,$chemin="images/icon.png",$categorie_id){
$link=connecter_db();
$requete=sprintf("insert into produit(libelle,prix,qtestock,chemin,categorie_id) 
values('%s',%f,%f,'%s',%d)", $libelle,$prix,$qtestock,$chemin,$categorie_id);
mysqli_query($link,$requete) or die("Erreur d'ajout ".mysqli_error($link));
}
//modifier
function update_produit($libelle,$prix,$qtestock,$chemin,$categorie_id,$id){
    $link=connecter_db();
    if(isset($chemin) && !empty($chemin)){
        $requete=sprintf("update produit set libelle='%s' , prix=%f , qtestock=%f, chemin='%s' , categorie_id=%d
         where id=%d",$libelle,$prix,$qtestock,$chemin,$categorie_id,$id) ;
        
    }else{

        $requete=sprintf("update produit set libelle='%s' , prix=%f , qtestock=%f , categorie_id
         where id=%d",$libelle,$prix,$qtestock,$categorie_id,$id) ;
    }
    mysqli_query($link,$requete) or die("Erreur de modification du produit $libelle ".mysqli_error($link));
    }

    //fin produit

    //categorie
    function update_categorie($nom,$categorie_id,$id){
        $link=connecter_db();
        if(isset($chemin) && !empty($chemin)){
            $requete=sprintf("update produit set libelle='%s' , prix=%f , qtestock=%f, chemin='%s' , categorie_id=%d
             where id=%d",$libelle,$prix,$qtestock,$chemin,$categorie_id,$id) ;
            
        }else{
    
            $requete=sprintf("update produit set libelle='%s' , prix=%f , qtestock=%f , categorie_id
             where id=%d",$libelle,$prix,$qtestock,$categorie_id,$id) ;
        }
        mysqli_query($link,$requete) or die("Erreur de modification du produit $libelle ".mysqli_error($link));
        }

    //fin categorie
//code session
function checker($email,$passe){

    $link=connecter_db();
    $requete=sprintf("select * from users where email='%s' and passe='%s'",
    $email,$passe) ;
 $resultat=   mysqli_query($link,$requete) or die("Erreur users  ".mysqli_error($link));
$ligne=mysqli_fetch_assoc($resultat);
if(!empty($ligne)){
    if(!isset($_SESSION)){

        session_start();// pour utiliser $_SESSION
    }

$_SESSION['nom']=$ligne['nom'];
$_SESSION['email']=$ligne['email'];
$_SESSION['passe']=$ligne['passe'];
}else{
    header("location:login.php?cn=no");
}
//
 return $ligne;    
}
//checker("test@gmail.com","1234");

//fin code session