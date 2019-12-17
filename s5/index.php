<?php 

if(isset($_GET['e']) && $_GET['e']=="vide"){
  $m="Tous les champs sont requis ";
  
}
else if(isset($_GET['e']) && $_GET['e']=="non"){
  $m="Veuillez reseigner les champs prix et qte  ";
}
else if(isset($_GET['e']) && $_GET['e']=="nn"){
  $m="ce n'est pas un nombre  ";

}else{
  $m="";
};
$classe =($m=="")?  "d-none":"d-block";

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>post / get</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto shadow p-2 mt-2">
          <div class="alert alert-danger <?=$classe?>">
            <?=$m;?>
          </div>
          <form action="calcul.php" method="post">
            <div class="form-group">
              <label for="prix">Prix : </label>
              <input type="text" class="form-control" name="prix" id="prix" />
            </div>
            <div class="form-group">
              <label for="qte">Quantité : </label>
              <input type="number" class="form-control" name="qte" id="prix" />
            </div>
            <button class="btn btn-primary btn-block">
              Valider
            </button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
