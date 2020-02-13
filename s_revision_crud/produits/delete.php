<?php 
require("functions.php");
$id=$_GET['id'];
delete($id);
header("location:index.php");

?>