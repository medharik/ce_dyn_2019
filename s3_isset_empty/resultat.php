<?php 
if(!isset($_GET['libelle']) || empty($_GET['libelle'])){
    header("location:form.php?lib=no");
}

//recuperation 
$libelle=$_GET['libelle'];
$prix=empty($_GET['prix']) ? 0:$_GET['prix'];
$qte=empty($_GET['qte'])? 0:$_GET['qte'] ;
$marque=!isset($_GET['marque'])? "sans marque":$_GET['marque'] ;

//empty . la variable existe et sa valeur est :
//"" ou '' , 0, 0.0, false, null, [],ou array


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <div class="card" style="width: 18rem;">
  <img src="http://placehold.it/300x300" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?=$libelle?></h5>
    <h5>Marque : <?=$marque?></h5>
    <p class="card-text"><?=$prix ?>$</p>
    <p class="card-text"><?=$qte ?> En stock</p>
   
    <p class="card-text">
       Valeur du stock   <span class="badge badge-primary">
   <?=$qte*$prix ?>DHS
    </span></p>

    <a href="#" class="btn btn-primary">Retour</a>
  </div>
</div>
        </div>
    </div>
</div>
    
</body>
</html>