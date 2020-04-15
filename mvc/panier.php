<?php 
session_start();
$panier=$_SESSION['panier'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include("_css.php");?>

</head>
<body>
    
     
    <div class="main">
     <div class="row">
    <div class="col-md-3"> <?php include("_aside.php");?></div>
    <div class="col-md-9">
    <div class="titre text-center text-primary">

    </div>
    <div class="contenu">
 <div class="row">
<?php  foreach($panier as $p) { ?>

 <div class="col-md-4 text-center border p-1 produit">
 <img src="http://placehold.it/300x300" alt="">
 <div><h5><?=$p['libelle']?> : <?=$p['prix']?>DHS</h5></div>
 </div>
<?php } ?>


 </div>
    </div>
    </div>

     </div> 
     
    </div>
    
    
    
    
    <?php include("_js.php");?>
</body>
</html>
     