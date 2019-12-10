<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 shadow mx-auto p-2 my-2">
        
        <form action="produits.php">
        <div class="form-group"><label for="catalogue">Catalogue </label>
<select name="catalogue" id="catalogue" class="form-control">
 <option value="">...</option>
 <option value="iphone">iphone</option>
 <option value="ipad">ipad</option>
</select>        
     
    </div> 

    <div class="form-group"><label for="">Nombre Max :</label>
    <input type="text" class="form-control" name="nombre">
     
    </div>
    <button class="btn btn-primary btn-block">Afficher</button>
        </form>
        
        </div>
    </div>
</div>
    
</body>
</html>