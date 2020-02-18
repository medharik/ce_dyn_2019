<?php 

    /* code commun  */

//connecter db 
function connecter_db(){
    $link= mysqli_connect("localhost","root","","db2020revision") 
     or die("Erreur de connexion a la base de donnees ");
     return $link;
   }
  
   
  // supprimer
  function delete($id,$table){
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
  // consultation d'une ressource par id 
  function find($id,$table="produit"){
      $link=connecter_db();
      $requete=sprintf("select * from $table where id=%d",$id) ;
   $resultat=   mysqli_query($link,$requete) or die("Erreur de selection du produit , id=$id ".mysqli_error($link));
  $ligne=mysqli_fetch_assoc($resultat);
   return $ligne;    
  }
  
  
  function uploader($infos,$dossier="images"){
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
  $destination="$dossier/$new_nom";
  move_uploaded_file($tmp,$destination);
  //recuperer les datas
  return $destination;
  }
  
// categorie 
function store_categorie($nom,$chemin="images/icon.png"){
$link=connecter_db();
$requete=sprintf("insert into categorie(nom,chemin) values('%s','%s')", $nom,$chemin);
mysqli_query($link,$requete) or die("Erreur d'ajout de la categorie ".mysqli_error($link));
}



function update_categorie($nom,$chemin,$id){
    $link=connecter_db();
    if(isset($chemin) && !empty($chemin)){
        $requete=sprintf("update categorie set nom='%s' ,
         chemin='%s' where id=%d",$nom,$chemin,$id) ;
        
    }else{

        $requete=sprintf("update categorie set nom='%s'  where id=%d",$nom,$id) ;
    }
    mysqli_query($link,$requete) or die("Erreur de modification de la categorie $nom ".mysqli_error($link));
    }

//fin categorie


// produit 
function store_produit($libelle,$prix,$qtestock,$chemin="",$categorie_id){
    $link=connecter_db();
    $requete=sprintf("insert into produit(libelle,prix,qtestock,chemin,categorie_id)
     values('%s',%f,%f,'%s',%d)", $libelle,$prix,$qtestock,$chemin,$categorie_id);
    mysqli_query($link,$requete) or die("Erreur d'ajout du produit ".mysqli_error($link));
    }
    
    
    
    function update_produit($libelle,$prix,$qtestock,$chemin="images/icon.png",$categorie_id,$id){
        $link=connecter_db();
        if(isset($chemin) && !empty($chemin)){
            $requete=sprintf("update produit 
            set libelle='%s',
            prix=%f,
            qtestock=%f,
            chemin='%s',
            categorie_id=%d,
            where id=%d",$libelle,$prix,$qtestock,$chemin="",$categorie_id,$id) ;
            
        }else{
    
            $requete=sprintf("update produit 
            set libelle='%s',
            prix=%f,
            qtestock=%f,
            categorie_id=%d,
            where id=%d",$libelle,$prix,$qtestock,$categorie_id,$id) ;
            
                }
        mysqli_query($link,$requete) or die("Erreur de modificationdu produit $libelle ".mysqli_error($link));
        }
    
    //fin produit
    



