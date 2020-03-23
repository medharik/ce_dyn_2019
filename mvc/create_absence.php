<?php 
require("modeles.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouvelle Absence </title>
    <?php include("_css.php");?>

</head>
<body>
    
    <?php include("_menu.php");?>
     
    <div class="main">
     <div class="row">
    <div class="col-md-3"> <?php include("_aside.php");?></div>
    <div class="col-md-9">
    <div class="titre text-center text-primary">
<h3> Nouvelle Absence </h3>
    </div>
    <div class="contenu">
 
   
    <form action="controller.php?t=absence&a=store" method="post">
<div class="form-group">
Date Absence : <input type="date" name="date_absence" id="nom" class="form-control">

</div>
<div class="form-group">
Nombre heure  : <input type="number" name="nombreHeure" id="nom" class="form-control">

</div>
<div class="form-group">
Matiere: <input type="text" name="matiere" id="nom" class="form-control">

</div>
<div class="form-group">
Liste des etudiants :
<div class="row">
<?php  
$etudiants=all("etudiant");

foreach ($etudiants as $e) {
 ?>
    <div class="col-md-3 border">
       <label>
    <img src="<?=$e['chemin']?>"class="img-fluid">
        <h4><?=$e['nomprenom']?></h4>
        <input type="checkbox" name="etudiant_id[]" value="<?=$e['id']?>">
</label>

    </div>
<?php } ?>
</div>

</div>



<button class="btn btn-primary">Valider</button>
</form>




    </div>
    </div>

     </div> 
     
    </div>
    
    




    
    
    
    <?php include("_js.php");?>
</body>
</html>
     