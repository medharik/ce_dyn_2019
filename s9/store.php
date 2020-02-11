<?php 

require("fonctions.php");
$libelle=$_POST['libelle'];
$prix=$_POST['prix'];
ajouter($libelle,$prix);
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
<h3>le produit <?=$libelle?> est ajoute avec succes </h3>    
</body>
</html>