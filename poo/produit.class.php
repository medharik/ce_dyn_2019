<?php 
//POO : STYLE DE  PROGRAMMATION basé sur des objets 
// une application en POO est composee de plusieurs objets en communication 
//NOTIONS DE BASE :
// CLASSE => type composé de donnees et de methodes (fontions) | exemple Produit(libelle,prix,qte + afficher(),...)
// OBJET => instance de Classe (exenplaire de classe )
// Produit hp;=? classe = Produit , hp est l'objet
// Produit dell;=? classe = Produit , dell est l'objet
// Produit sony = new Produit("sony vaio ",10000);=> declarer un objet sony de type produit + 
//instancier l'objet => le construire dans la memoire pour pouvoir
// methode = fonction = message = operation  =comportement 
// attribut = champs = fields = donnees 

// classe = Modele = type
//objet = exemplaire = instance 
//Facture (classe) (numero, date + imprimer() , majStock())
//Facture f1=new Facture("1",'01/01/2020');
/* Facture f2=new Facture("2",'01/02/2020');
Appartement a1; 
Appartement a2; 
Clio4 cl1;
Clio4 cl2;
*/
// Etudiant($nom,$age+afficher);
class Produit{
    // attributs
public $libelle=null;
public $prix=0;
public $qte=0;
public $marque;
//constructeur :  une methode permettant d'initialiser les attributs lors de 
// construction d'un objet d'une classe
//$dell=new Produit("hp dv 6",5000,0,"HP");

function __construct($lib,$prix,$qte=0,$marque="Inconnu"){
$this->libelle=$lib;
$this->prix=$prix;
$this->qte=$qte;
$this->marque=$marque;
}
// les fonctions
function afficher(){
echo '<hr>'.$this->libelle.' coute '.$this->prix.', de marque '.$this->marque.'<br>';
}
function en_stock(){
  if($this->qte>0) echo $this->libelle.' est en stock';
  else  echo $this->libelle.' est en rutpure de  stock';
}

}

?>