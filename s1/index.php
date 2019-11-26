<?php 
$prenom ="ALI";
$age=16;
if($age>18){
    $maj="Majeur";
}else{
$maj="Mineur";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h2>Bienvenue <?php echo $prenom; ?></h2>
    <h3>Vous etes <?= $maj ;?> </h3>
</body>
</html>