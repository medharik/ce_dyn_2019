<?php 
require("functions.php");
$id=$_GET['id'];
delete($id,"categorie");
header("location:index.php");

?>