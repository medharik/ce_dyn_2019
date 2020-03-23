<?php 
require("modeles.php");
$etudiants=all("etudiant");
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
Liste des etudiants :
    </div>
    <div class="contenu">
 

<table class="table table-striped">
    <tr>
    <th>id</th>
    <th>Nom prenom</th>
    <th>Photo</th>
    <th>classe</th>
    <th>action</th>
    </tr>
    <?php foreach($etudiants as $c) {?>
        <tr>
        <td><?=$c['id']?></td>
        <td><?=$c['nomprenom']?></td>
        <td><img src="<?=$c['chemin']?>" width="150" class="img-thumbnail"></td>
        <?php 
        $classe=find("classe",$c['classe_id'])
        ?>
        <td><?=$classe['nom']?></td>



        <td>
        <a href="controller.php?t=etudiant&a=delete&id=<?=$c['id']?>" class="btn btn-danger">S</a>
        <a href="edit_etudiant.php?id=<?=$c['id']?>" class="btn btn-warning">M</a>
        <a href="show_etudiant.php?id=<?=$c['id']?>" class="btn btn-info">C</a></td>
        </tr>

    <?php } ?>
</table>


    </div>
    </div>

     </div> 
     
    </div>
    
    
    
    
    <?php include("_js.php");?>
</body>
</html>
     
