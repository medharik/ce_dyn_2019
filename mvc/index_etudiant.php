<?php 
require("modeles.php");
require("config.php");

if(isset($_GET['mot_cle'])){
    $etudiants=   rechercher_etudiant($_GET['mot_cle'],$_GET['classe']);
}else{
    $etudiants=all("etudiant");


}

$classes=all("classe");
// var_dump($classes);

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
    <div class="alert">

    <form action="index_etudiant.php" method="get">
    Nom :<input type="text" name="mot_cle"> 

   <label>Classe : </label> <select name="classe" id="classe">
    <option value="" selected>...</option>
<?php  foreach($classes as $c ){?>
    <option value="<?=$c['id']?>"><?=$c['nom']?></option>
<?php } ?>
    
    </select>
    <button class="btn btn-sm btn-primary">Rechercher</button>
    </form>
     
<?php if(isset($_GET['classe']) && !empty($_GET['classe'])) {?>
    <div class="alert alert-info">
    Liste des etudiants de classe : <?php 
   $cl= find("classe",$_GET['classe']);
    echo $cl['nom'];
    //https://web.microsoftstream.com/video/81c4e41a-3703-4230-8014-2e82e5e364bb
    ?>
    </div>
<?php } ?>
    </div>
    <div class="contenu">
 

<table class="table table-striped">
    <tr>
    <th>id</th>
    <th>Nom prenom</th>
    <th>Photo</th>
    <th>classe</th>
    <th>Cumul. D'absence</th>
    <th>Note de discipline</th>
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

<td><?php
              $res=etudiant_cumul_absence($c['id']);
             echo $res['cumul_absence'];
             
             ?></td>
             <td>
         <?=    20-($res['cumul_absence']*TAUX )   ?>
             </td>

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
     
