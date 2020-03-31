
<?php 
require("modeles.php");
$classes=all("classe");
?><!DOCTYPE html>
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
<h3>Nouvelle classe : </h3>

    </div>
    <div class="contenu">
<div class="row">
    <div class="col-md-6 mx-auto">
<div class="alert alert-info"></div>
     
<form action="controller.php?t=classe&a=store" method="post">
<div class="form-group">
Nom : <input type="text" name="nom" id="nom" class="form-control">

</div>
<button type="submit" class="btn btn-primary" id="b_add">Valider</button>
</form>
    </div>
</div>
    

    </div>
    </div>

     </div> 
     
    </div>
    
    
    
    
    <?php include("_js.php");?>
    <script>
      
$(document).ready(function(){
    $('.alert-info').hide();
});

    $(document).on('click','#b_add',function(event){
        event.preventDefault();
        $.ajax({
url: "controller.php?t=classe&a=store",
method:'POST',
data: {'nom':$('#nom').val()}
 
})
.done(function(data){
$('.alert-info').show().html(data);
})

.fail(function(error){
console.log('erreur',error)
})


.always(function(){
console.log('fin ....');

});

    });
    
    </script>

</body>
</html>
     