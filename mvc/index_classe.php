<?php 
require("modeles.php");
$classes=all("classe");
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
Liste des classes :
    </div>
    <div class="contenu">
 

<table class="table table-striped">
    <tr>
    <th>id</th>
    <th>Nom</th>
    <th>action</th>
    </tr>
    <?php foreach($classes as $c) {?>
        <tr>
        <td><?=$c['id']?></td>
        <td><?=$c['nom']?></td>
        <td>
        <a href="" class="btn btn-danger">S</a>
        <a href="" class="btn btn-warning">M</a>
        <a href="" class="btn btn-info">C</a></td>
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
     
