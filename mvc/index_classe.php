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
</head>
<body>
<table>
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
        <a href="">S</a>
        <a href="">M</a>
        <a href="">C</a></td>
        </tr>

    <?php } ?>
</table>

    
</body>
</html>