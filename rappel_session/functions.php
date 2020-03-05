<?php
//connecter db 
 function connecter_db(){
  $link= mysqli_connect("localhost","root","","db2020revision") 
   or die("Erreur de connexion a la base de donnees ");
   return $link;
 }
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


 ?>