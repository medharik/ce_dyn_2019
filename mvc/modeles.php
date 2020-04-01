<?php 
//MYSQLI
//PDO :PHP DATA OBJECT , extension permettant au PHP de fonctionner
// n'imporate SGBDR (mysql, sql server , oracle ,...)
// SQL CREATE TABLE :
// CREATE TABLE etudiant (
//     id INT PRIMARY KEY auto_increment,
//     nomprenom VARCHAR(100),
//     chemin VARCHAR(255),
//     classe_id INT ,
//     CONSTRAINT fk_12  FOREIGN KEY(classe_id) REFERENCES classe (id) ON DELETE CASCADE 
//     )
// CREATE TABLE absence (
//     id INT PRIMARY KEY auto_increment,
//     date_absence VARCHAR(100),
//     nombreHeure VARCHAR(255),
//     details TEXT ,
//      etudiant_id INT  ,
//     CONSTRAINT fk_100  FOREIGN KEY(etudiant_id) REFERENCES etudiant (id) ON DELETE CASCADE 
//     )

//connexion 
function connecter_db(){
    $options=[
        PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
    ];
    $link = new PDO('mysql:host=localhost;dbname=db2020revision', 'root', '',$options); 
return $link;
}
//classe : 
function ajouter_classe($nom){
$link=connecter_db();
$rp=$link->prepare("insert into classe(nom) values(?)");
$rp->execute([$nom]);
}
function modifier_classe($nom,$id){
$link=connecter_db();
$rp=$link->prepare("update classe set nom=?  where id=? ");
$rp->execute([$nom,$id]);
}

//fin classe
//etudiant : 
function ajouter_etudiant($nomprenom,$chemin,$classe_id){
$link=connecter_db();
$rp=$link->prepare("insert into etudiant(nomprenom,chemin,classe_id) values(?,?,?)");
$rp->execute([$nomprenom,$chemin,$classe_id]);
}
function modifier_etudiant($nomprenom,$chemin,$classe_id,$id){
$link=connecter_db();
$rp=$link->prepare("update etudiant set nomprenom=?, chemin=? , classe_id=? where id=?");
$rp->execute([$nomprenom,$chemin,$classe_id,$id]);
}

//fin etudiant 
//absence : 
function ajouter_absence($date_absence,$nombreHeure,$etudiant_id){
    try{
        
        $link=connecter_db();
        $rp=$link->prepare("insert into absence(date_absence,nombreHeure,etudiant_id)  values(?,?,?)");
        $rp->execute([$date_absence,$nombreHeure,$etudiant_id]);
    }catch(PDOException $e){

        die($e->getMessage());
    }
}

//fin absence 

// code commun

function supprimer($table,$id){
    $link=connecter_db();
    $rp=$link->prepare("delete from $table where id=?");
    $rp->execute([$id]);
}
function all($table){
    $link=connecter_db();
    $rp=$link->prepare("select * from $table order by id desc");
    $rp->execute();
  $resultat=  $rp->fetchAll();
  return $resultat;
}
function find($table,$id){
    $link=connecter_db();
    $rp=$link->prepare("select * from $table where id=?");
    $rp->execute([$id]);
  $resultat=  $rp->fetch();
  return $resultat;
}
function findBy($table,$condition){
    $link=connecter_db();
    $rp=$link->prepare("select * from $table where $condition");
    $rp->execute([$id]);
  $resultat=  $rp->fetch();
  return $resultat;
}

// stats
function etudiant_cumul_absence($etudiant_id){
    $link=connecter_db();
    $rp=$link->prepare("select sum(nombreHeure) as cumul_absence from absence 
   where  etudiant_id=? 
    
    ");
    $rp->execute([$etudiant_id]);
  $resultat=  $rp->fetch();
  return $resultat;
}


// fin stats 

// recherche 
function rechercher_etudiant($mot_cle){
    $link=connecter_db();
    // select * from etudiant where nomprenom like '%ali%'
    $rp=$link->prepare("select * from etudiant where nomprenom like ? order by id desc");
    $rp->execute(["%$mot_cle%"]);
  $resultat=  $rp->fetchAll();
  return $resultat;
}

// fin de recherche 
//exemple : findBy("etudiant","classe_id=1") : liste des etudiant ayant classe_id=1

// fin code commun

//code session
function demarrer_session(){
    if(!isset($_SESSION)){
        session_start();
    }
 }
//verifier si l'user est deja inscrit
//checker("admin@gmail.com","1234");
function checker($email,$passe){
$link=connecter_db();
$requete=sprintf("select * from users where email='%s' and passe = '%s'",$email,$passe);
$resultat=mysqli_query($link,$requete) or die("Erreur selection de l'utilisateur");
 $ligne=mysqli_fetch_assoc($resultat);
  
  if(empty($ligne)){
      header("location:login.php?cn=no");
      exit();
  }else{

      $_SESSION['email']=$ligne['email'];
      $_SESSION['passe']=$ligne['passe'];
      $_SESSION['nom']=$ligne['nom'];

  }
}
//fin code session
//code uplaod 

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

//fin  code upload
// code metier 
function noteDicip($id){
return 20;
}
?>