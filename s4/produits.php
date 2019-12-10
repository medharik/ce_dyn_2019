<?php 
extract($_GET);
// cad : 
//$catalogue=$_GET['catalogue'];
// $nombre=$_GET['nombre'];

            $iphones=[
//   $k=>$iphone
                'iphone1'=>["libelle"=>"iphone1","prix"=>3000,"img"=>"iphone1.jpg"],
            
                'iphone2'=>["libelle"=>"iphone2","prix"=>5000,"img"=>"iphone5.jpg"],
            
                'iphone3'=>["libelle"=>"iphone3","prix"=>6000,"img"=>"iphone3.jpg"],         
            
            ];
 
            $ipads=[
                'ipad1'=>["libelle"=>"ipad1","prix"=>3000,"img"=>"ipad1.jpg"],
            
                'ipad2'=>["libelle"=>"ipad2","prix"=>5000,"img"=>"ipad2.jpg"],
                
            ];

$produits=['iphone'=>$iphones,'ipad'=>$ipads];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body><div class="container">

<table class="table table-tripped">
<thead>

<tr>
    <th>Image </th>
    <th>Libelle</th>
    <th>prix</th>
</tr>
</thead>
<tbody>
<?php foreach ($produits[$catalogue] as $k => $iphone) {?>
<tr>
    <td><img src="images/<?=$iphone['img']?>" width="100"></td>
    <td><?=$iphone['libelle']?>  </td>
    <td><?=$iphone['prix']?></td>
</tr>
<?php } ?>
</thead>


</table>
    
</div>

</body>
</html>