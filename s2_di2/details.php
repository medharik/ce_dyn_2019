<?php 
$r=[];
$tasnime1=[
    "images"=>"images/tasnime1.png",

    "nom"=>"TASNIME",
"prix"=>9000000,
"surface"=>100,
];
$tasnime2=[
"images"=>"images/residence .png",
"nom"=>"TASNIME 2",
"prix"=>9998820,
"surface"=>90,
];
$residences=[$tasnime1,$tasnime2];
var_dump($residences);
var_dump($tasnime1["prix"],$tasnime1["nom"]);
echo "<hr>";



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php s3</title>
</head>
<body>
    
   <?php foreach($residences as $r) {?>
    <?php foreach($r as  $cle=>$valeur){ ?>
<?php if($cle=="images") { ?>
<img  src="<?=$valeur?>" height="200">
<?php } else { ?>
<h3>
<?=$cle?> : <?=$valeur?>
</h3>
<?php } ?>

    <?php }?>

   <?php } ?>
</body>
</html>