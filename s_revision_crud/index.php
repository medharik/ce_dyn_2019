<?php 
require("functions.php");
$resultat=all();

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
<div class="container">
    <table class="table table-striped">
        <thead>
        <tr>
        <th>id</th>
        <th>Libelle</th>
        <th>qte en stock</th>
        <th>prix</th>
        <th>actions</th>
        </tr>
        </thead>


        <tbody>
<?php while($ligne=mysqli_fetch_assoc($resultat)) {?>
        <tr>
       <td><?=$ligne['id']?></td>
       <td><?=$ligne['libelle']?></td>
       <td><?=$ligne['prix']?></td>
       <td><?=$ligne['qtestock']?></td>
       <td><a onclick="return confirm('supprimer?')" href="delete.php?id=<?=$ligne['id']?>" class="btn btn-danger btn-sm">supprimer</a>
       <a href="" class="btn btn-warning btn-sm">modifier</a>
       <a href="show.php?id=<?=$ligne['id']?>" class="btn btn-info btn-sm">consulter</a></td>
        </tr>
<?php } ?>

        </tbody>
    </table>
</div>
    
</body>
</html>