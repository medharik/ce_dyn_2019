<?php 
require("modeles.php");
extract($_POST);//$nom (form)
extract($_GET);//$t,$a (lien)
// t est la table , a est l'action
if($t=="classe"){
    if($a=="store"){
        ajouter_classe($nom);
        die("ajout ok");
    }
    if($a=="update"){
        modifier_classe($nom,$id);
    }
    if($a=="delete"){
        supprimer("classe",$id);
    }
    header("location:index_classe.php");


}
if($t=="etudiant"){
    if($a=="store"){
        $chemin=uploader($_FILES['chemin']);
        ajouter_etudiant($nomprenom,$chemin,$classe_id);
    }
    if($a=="update"){
        modifier_etudiant($nomprenom,$chemin,$classe_id,$id);
    }
    if($a=="delete"){
        supprimer("etudiant",$id);
    }
    header("location:index_etudiant.php");


}
if($t=="absence"){
    if($a=="store"){
        // var_dump($etudiant_id);
        // die();
foreach ($etudiant_id as $id) {
  
           ajouter_absence($date_absence,$nombreHeure,$id);
         
} 
    }
    if($a=="update"){
        modifier_etudiant($nomprenom,$chemin,$classe_id,$id);
    }
    if($a=="delete"){
        supprimer("etudiant",$id);
    }
    header("location:index_absence.php");


}



?>