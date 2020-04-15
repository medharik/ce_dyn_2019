
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include("_css.php");?>

</head>
<body>
    
    <?php include("_menu.php");?>
     
    <div class="main">
     <div class="row">
    <div class="col-md-3"> <?php include("_aside.php");?></div>
    <div class="col-md-9">
    <div class="titre text-center text-primary">

    </div>
    <div class="contenu">
 <div class="row">
 
 <div class="col-md-4 text-center border p-1 produit">
 <img src="http://placehold.it/300x300" alt="">
 <div><h5>TACOS BINGO : 30DHS</h5></div>
 <form action="ajout_au_panier.php" method="post">
 <input type="hidden" name="libelle" value="TACOS BINGO">
 <input type="hidden" name="prix" value="30">
 <input type="hidden" name="id" value="1">
 <button class="btn btn-sm btn-primary">Ajouter au panier</button>

 </form>
 </div>
 <div class="col-md-4 text-center border p-1 produit">
 <img src="http://placehold.it/300x300" alt="">
 <div><h5>PIZZA  4 saisons: 40DHS</h5></div>
 <form action="ajout_au_panier.php" method="post">
 <input type="hidden" name="libelle" value="PIZZA  4 saisons">
 <input type="hidden" name="prix" value="40">
 <input type="hidden" name="id" value="2">
 <button class="btn btn-sm btn-primary">Ajouter au panier</button>

 </form>
 </div>
 <div class="col-md-4 text-center border p-1 produit">
 <img src="http://placehold.it/300x300" alt="">
 <div><h5>SANDWICH VIANDE  : 25DHS</h5></div>
 <div><form action="ajout_au_panier.php" method="post">
 <input type="hidden" name="libelle" value="SANDWICH VIANDE">
 <input type="hidden" name="prix" value="25">
 <input type="hidden" name="id" value="3">
 <button class="btn btn-sm btn-primary">Ajouter au panier</button>
 </form></div>
 </div>
 
 </div>
    </div>
    </div>

     </div> 
     
    </div>
    
    
    
    
    <?php include("_js.php");?>
</body>
</html>
     