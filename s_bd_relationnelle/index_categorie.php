<?php 
require("functions.php");
session_start();
checker($_SESSION['email'],$_SESSION['passe']);
$resultat=all("categorie");
$notice="";
if(isset($_GET['op'])){
   $notice="Operation effectuee avec succes";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des produits</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<?php include("menu.php");?>
<?php  if(!empty($notice)) {?>
<div class="alert alert-info">
<?=$notice;?>
</div>
<?php } ?>
<div class="container">
    <table class="table table-striped">
        <thead>
        <tr>
        <th>id</th>
        <th>Image</th>
        <th>Nom</th>
        <th>Nombre de produits</th>
        <th>actions</th>
        </tr>
        </thead>


        <tbody>
<?php while($ligne=mysqli_fetch_assoc($resultat)) {?>
        <tr>
       <td><?=$ligne['id']?></td>
       <td><img src="<?=$ligne['chemin']?>" width="150"></td>
       <td><?=$ligne['nom']?></td>
    
       <td><?php
$r=allBy("categorie_id=".$ligne['id'],"produit");
$nombre=mysqli_num_rows($r);
echo $nombre;
       ?></td>
       <td><a onclick="return confirm('supprimer?')" href="delete_categorie.php?id=<?=$ligne['id']?>" class="btn btn-danger btn-sm">supprimer</a>
       <a href="edit_categorie.php?id=<?=$ligne['id']?>" class="btn btn-warning btn-sm">modifier</a>
       <a href="show_categorie.php?id=<?=$ligne['id']?>" class="btn btn-info btn-sm">consulter</a></td>
        </tr>
<?php } ?>

        </tbody>
    </table>
</div>
    
</body>
</html>