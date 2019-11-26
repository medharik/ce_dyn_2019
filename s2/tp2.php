<?php 
//recuperer les infos (parametres) depuis l'url
$age=$_GET['age'];
$nom=$_GET['nom'];
if ($age>18) {
    $classe="maj";
    $src="images/maj.jpg";
} else {
    $classe="min";
    $src="images/min.jpg";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>s2 en php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="<?=$classe?>">
<h3>Vous etes : <?php  echo $nom;?></h3>
<h4>Vous avez <?=$age ;?> ans </h4>
    <img src="<?= $src;?>" alt="">
</body>
</html>