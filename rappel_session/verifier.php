<?php 
require("functions.php");
demarrer_session();
extract($_POST);//email,passe
checker($email,$passe);
header("location:vip.php");
die();

?>