<?php 
require("functions.php");
extract($_POST);
checker($email,$passe);
header("location:index_produit.php");
?>