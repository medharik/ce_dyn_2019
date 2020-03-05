
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php  if(isset($_GET['cn'])){ ?>
    Login/ mot de passe incorrects
<?php } ?>


    
    <form action="verifier.php" method="post">
    
  Login :   <input type="text" name="email">
    Mot de passe : <input type="text" name="passe">
    <button>Connexion</button>
    </form>
</body>
</html>