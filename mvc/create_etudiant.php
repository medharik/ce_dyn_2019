<?php 
require("modeles.php");
$classe=all("classe");
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
    
    <?php include("_menu.php");?>
     
    <div class="main">
     <div class="row">
    <div class="col-md-3"> <?php include("_aside.php");?></div>
    <div class="col-md-9">
    <div class="titre text-center text-primary">

    </div>
    <div class="contenu">
<form action="controller.php?t=etudiant&a=store" method="post" enctype="multipart/form-data" >
<div class="form-group">

    Nom & Prenom:<input type="text" class="form-control" name="nomprenom">
</div>
<div class="form-group">
    <input type="file" class="form-control" name="chemin">

</div>
<div class="form-group">
    
  Classe  <select class="form-control" name="classe_id" id=""> 
<?php foreach ($classe as $m => $c) {?>

    <option value="<?=$c['id']?>">
    <?=$c['nom']?>
 </option>

<?php } ?>

    </select>

</div>

<div class="form-group">
<button class="btn btn-primary">Ajouter</button>
</div>

</form>

 
    </div>
    </div>

     </div> 
     
    </div>
    
    
    
    
    <?php include("_js.php");?>
</body>
</html>
     