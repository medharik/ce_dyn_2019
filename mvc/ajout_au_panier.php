<?php
session_start();
extract($_POST);

  
   $_SESSION['panier'][]=['libelle'=>$libelle,'prix'=>$prix,'id'=>$id];

header("location:menu_produit.php");


?>