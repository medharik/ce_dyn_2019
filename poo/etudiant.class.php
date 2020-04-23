<?php 
// le premier  principe  de POO :
//Encapsulation :
// ROLE : PROTEGER LES ATTRIBUTS 
class Etudiant{
  private  $nom;
  private  $prenom;
  private  $age;

// constructeur 
function __construct(String $nom,String $prenom, int $age=0){
$this->nom=$nom;
$this->prenom=$prenom;
$this->age=$age;
}
public function setAge($age){
if(is_numeric($age)){
$this->age=$age;
}else{
  echo "La valeur de l'age est  incorrecte";
}

}


function afficher(){
echo $this->nom.' '.$this->prenom.'<br>';

}
function majorite(){
if($this->age> 18) echo " <br> ".$this->nom." est majeur <br>";
else echo '<br> '.$this->nom." est mineur <br>";
}



}


?>