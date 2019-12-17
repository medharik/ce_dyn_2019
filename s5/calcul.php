<?php 
    //verifier l'exsitance du prix ,qte
    if(! isset($_POST['prix']) || !isset($_POST['qte'])  ){
    header("location: index.php?e=non");
    die();
    }
    //verifier si les donnees sont empty
    if(empty($_POST['prix']) || empty($_POST['qte'])  ){
    header("location: index.php?e=vide");
    die();
    }
    
    //verifier la validite des nombres
    if( ! is_numeric($_POST['prix']) || !is_numeric($_POST['qte'])  ){
    header("location: index.php?e=nn");
    die();
    }

    // $prix=$_POST['prix'];
    // $qte=$_POST['qte'];
    extract($_POST);


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
    <ul>
        <li>Prix : <?=$prix;?> $</li>
        <li>Qte : <?=$qte;?></li>
        <li>TTC : <?=$prix*$qte;?> $</li>
     
    </ul>
    <a href="javascript:history.go(-1)">retour</a>
    <br>
    <a href="javascript:window.location='http://localhost:83/cesadyn2019/s5/index.php'">retour 2</a>
</body>
</html>