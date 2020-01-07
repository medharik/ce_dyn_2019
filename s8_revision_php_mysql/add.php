<?php 
//recuperer les donnees (name)
extract($_POST);// $nom , $email
//securiser


// connexion avec bd

$link=mysqli_connect("localhost","root","","dbrevision2020") or die("erreur de connexion bd");

//preparer une requete SQL
$sql="insert into contact(nom,email,specialite,sexe) values ('$nom','$email','$specialite','$hf')";

//executer la requete 
mysqli_query($link,$sql) or die("erreur d'ajout du contact ".mysqli_error($link));

//redirection avec indication de succes
header("location:contact.php?s=yes");

?>