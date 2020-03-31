<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<form >
Prix : <input type="text" name="prix" id="prix">
Quantité : <input type="text" name="qte" id="qte">
<button type="button" onclick="calculer()">Valider</button>

</form>
<div class="alert alert-info " id="resultat">

</div>

<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>


  <script>
  $('#resultat').hide();

  function calculer(){
$.ajax({
url: "tht.php",
method:'GET',
data: {'prix':$('#prix').val(),'qte':$('#qte').val()}

})
.done(function(data){
//alert(data)
$('#resultat').show().html(data);
})

.fail(function(error){
console.log('erreur',error)
})


.always(function(){
console.log('fin ....');

});
  }
  
  </script>


</body>
</html>