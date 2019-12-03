<?php 

$c=isset($_GET['c'])? $_GET['c']:"";
$message="";
$classe="d-none";
if(isset($c) && $c=="vide"){
    $message="Erreur ,  tous les chamos sont requis";
    $classe="d-blcok";

}
if(isset($c) && $c=="no"){
    $message="Erreur ,  Mot de passe incorrect";
    $classe="d-blcok";

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>form</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto shadow my-2    p-2">
<div class="alert alert-danger <?=$classe?>">
    <?=$message?>
</div>
        <form action="check.php">
            <div class="form-group">
                <label for="pseudo">Pseudo (*)</label>
                <input type="text"  class="form-control" id="pseudo" name="pseudo">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="passe">Mot de passe </label>
                <input type="password" class="form-control" id="passe" name="passe">
            </div>
            <button class="btn btn-primary btn-block">Valider</button>
        </form>
        </div>
    </div>
</div>
    

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>