<?php include("../config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nouveau </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<?php include(URL."menu.php");?>

<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto shadow p-2">
        <form action="store.php" method="post"  
        enctype="multipart/form-data">

        <div class="form-group"><label for="nom">nom</label>
        <input required type="text" class="form-control" name="nom" id="nom" >
        </div>
       
        <div class="form-group"><label for="chemin">Image de la Categorie : </label>
        <input type="file" class="form-control" name="chemin" id="chemin">
        </div>
<button class="btn btn-primary btn-sm">Ajouter</button>

        
        </form>
        </div>
    </div>
</div>
    
</body>
</html>