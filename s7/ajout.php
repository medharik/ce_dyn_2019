<?php 
//recuperer les donnees depuis le form
$libelle=$_POST['libelle'];
$prix=$_POST['prix'];
$qtestock=$_POST['qtestock'];
//connexion a la bd :
$link=mysqli_connect("localhost","root","","ce_mardi_2019") or die("Erreur de connexion");
//preparer la requete
$requete="insert into produit(libelle,prix,qtestock) values('$libelle',$prix,$qtestock)";
//executer 
mysqli_query($link,$requete) or die("Erreur d'ajout de produit ".mysqli_error($link));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h3>Ajout ok</h3>
    
</body>
</html>