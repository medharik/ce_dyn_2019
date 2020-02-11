<?php 
require("functions.php");
$id=$_GET['id'];
$produit=find($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edition du produit <?=$produit['libelle']?>  </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<?php include("menu.php");?>

<div class="container">
    <div class="row">
        <div class="col-md-6 shadow p-2">
        <form action="update.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?=$produit['id']?>">
        <div class="form-group"><label for="libelle">Libelle</label>
        <input required type="text" class="form-control" name="libelle" id="libelle"  value="<?=$produit['libelle']?>" >
        </div>
        <div class="form-group"><label for="prix">Prix</label>
        <input type="number" class="form-control" name="prix" id="prix" value="<?=$produit['prix']?>">
        </div>
        <div class="form-group"><label for="qtestock">Quantite en stock : </label>
        <input type="number" class="form-control" name="qtestock" id="qtestock" value="<?=$produit['qtestock']?>">
        </div>
        <div class="form-group"><label for="chemin">Changer l'image du produit : </label>
        <input type="file" class="form-control" name="chemin" id="chemin">
        </div>
<button class="btn btn-primary btn-sm">Valider</button>

        
        </form>
        </div>
        <div class="col-md-6">
        <img src="<?=$produit['chemin']?>" class="img-fluid">
        </div>
    </div>
</div>
    
</body>
</html>