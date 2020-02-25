<?php 
require("functions.php");
$id=$_GET['id'];
$ligne=find($id);
extract($ligne);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consultation </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    
</head>
<body>

<?php include("menu.php");?>

<div class="card" style="width: 18rem;">
  <img src="http://placehold.it/300x300" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?=$libelle?></h5>
    <p class="card-text">Prix : <?=$prix?> DHS </p>
    <p class="card-text"><?=$qtestock?></p>
    <a href="index.php" class="btn btn-primary">Retour</a>
  </div>
</div>
</body>
</html>