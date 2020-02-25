<?php 
$message="";
$classe="d-none";
if(isset($_GET['cn'])){
    $message ="login / mot de passe incorrects";
    $classe="d-block";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="login.css">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Connexion</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">
				<form action="verifier.php" method="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="email" name="email" class="form-control" placeholder="Login">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input name="passe" type="password" class="form-control" placeholder="Mot de passe">
					</div>
					
					<div class="form-group">
						<input type="submit" value="Se connecter" class="btn float-right login_btn">
					</div>
                    
                    <div class="clearfix ">
                    <br><br></div>
					<div class="form-group">
<div class="alert alert-danger <?=$classe?>">
<?=$message?>
</div>
					</div>

				</form>
			</div>
		
		</div>
	</div>
</div>
</body>
</html>