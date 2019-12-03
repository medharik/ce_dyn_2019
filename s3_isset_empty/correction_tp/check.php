<?php 
//recuperer les data par name dans $_GET
$pseudo=$_GET['pseudo'];
$email=$_GET['email'];
$passe=$_GET['passe'];

//verifier la diponibilite des valeurs 
if(empty($pseudo) || empty($email) || empty($passe) ){
    header("location:form.php?c=vide");
// die();
}else
//check if passe =1234
if($passe != 1234){
    
    header("location:form.php?c=no");
}else
header("location:accueil.php?pseudo=$pseudo");

?>
