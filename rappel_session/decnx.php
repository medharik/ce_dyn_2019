<?php 
require("functions.php");
demarrer_session();
session_destroy();
header("location:login.php");
?>