<?php 
require("functions.php");
demarrer_session();
checker($_SESSION['email'],$_SESSION['passe']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Bienvenue <?=$_SESSION['nom'];?></h3>
    <a href="decnx.php">Deconnexion</a>
</body>
</html>