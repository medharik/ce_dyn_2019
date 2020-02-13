<?php 
require("functions.php");
$id=$_GET['id'];
$categorie=find($id,"categorie");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edition du categorie <?=$categorie['nom']?>  </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<?php include("menu.php");?>

<div class="container">
    <div class="row">
        <div class="col-md-6 shadow p-2">
        <form action="update.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?=$categorie['id']?>">
        <div class="form-group"><label for="nom">nom</label>
        <input required type="text" class="form-control" name="nom" id="nom"  value="<?=$categorie['nom']?>" >
        </div>
         <div class="form-group"><label for="chemin">Changer l'image  : </label>
        <input type="file" class="form-control" name="chemin" id="chemin">
        </div>
<button class="btn btn-primary btn-sm">Valider</button>

        
        </form>
        </div>
        <div class="col-md-6">
        <img src="<?=$categorie['chemin']?>" class="img-fluid">
        </div>
    </div>
</div>
    
</body>
</html>