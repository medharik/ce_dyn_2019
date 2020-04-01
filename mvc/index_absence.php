<?php 
require("modeles.php");
$absences=all("absence");
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
Liste des absences :
    </div>
    <div class="contenu">
 
   <!--  date_absence,nombreHeure,etudiant_id -->
<table class="table table-striped">
    <tr>
    <th>#</th>
    <th>Etudiant</th>
    <th>Date D'absence</th>
    <th>Nombre D'heure</th>
    <th>action</th>
    </tr>
    <?php foreach($absences as $c) {?>
        <tr>
        <td><?=$c['id']?></td>
        <td><?php 
        $etudiant=find("etudiant",$c['etudiant_id']);
        
             ?>
             <img src="<?=$etudiant['chemin']?>" width="150" class="img-thumbnail" >
             <h5><?=$etudiant['nomprenom']?></h5>
             </td>
             <td><?=$c['date_absence']?></td>
             <td><?=$c['nombreHeure']?></td>
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
     
