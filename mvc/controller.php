<?php 
require("modeles.php");
extract($_POST);//$nom (form)
extract($_GET);//$t,$a (lien)
// t est la table , a est l'action
if($t=="classe"){
    if($a=="store"){
        ajouter_classe($nom);
        header("location:index_classe.php");
    }
    if($a=="update"){
        modifier_classe($nom,$id);
    }
    if($a=="delete"){
        supprimer("classe",$id);
    }

}
if($t=="etudiant"){
    if($a=="store"){
        ajouter_etudiant($nom);
    }
    if($a=="update"){
        modifier_etudiant($nom,$id);
    }

}


?>