<?php 
$message="";
if(isset($_GET['s']) && $_GET['s']=='yes'){
    $message="MESSAGE ENVOYE";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>contact</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 shadow p-2 my-2 mx-auto">
        <?php if(!empty($message))  { ?>

<div class="alert alert-info">
<?=$message?>
</div>
        <?php } ?>
        <form action="add.php" method="post">
        <div class="form-group"><label for="nom">Nom </label>
        <input type="text"  name="nom" id="nom" class="form-control"></div>
       
        <div class="form-group"><label for="email">Email </label>
        <input type="text"  name="email" id="email" class="form-control"></div>
       
       
        <div class="form-group"><label for="specialite">Specialite </label>
        <select type="text"  name="specialite" id="specialite" class="form-control">
        <option value="" selected>...</option>
        <option value="informatique">Info</option>
        <option value="management">Gestion</option>
        </select>
        </div>
       
        <div class="form-check">
  <input class="form-check-input" type="radio" name="hf" id="homme" value="homme" checked>
  <label class="form-check-label" for="exampleRadios1">
   Homme
  </label>
</div>
        <div class="form-check">
  <input class="form-check-input" type="radio" name="hf" id="femme" value="femme" checked>
  <label class="form-check-label" for="exampleRadios1">
   Femme
  </label>
</div>

<button type="submit" class="btn btn-primary col-md-6 d-block mx-auto">Envoyer</button>
        </form>
        
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
</body>
</html>