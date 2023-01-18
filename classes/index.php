<?php
require_once '/Applications/MAMP/htdocs/POO_LC/classes/Compte_class.php';

// On instancie le compte
$compte1 = new Compte('Benoit');
// On ecrit dans la propriete titulaire
/*$compte1->titulaire = 'Benoit';*/
// on ecrit dans la propriete solde.
//$compte1->solde = 80.3; 
var_dump($compte1);
echo '<br/>';
$compte2 = new Compte ('Robert', 90.7);
/*$compte2->titulaire = 'Robert';*/
//$compte2->solde = 90.7;


var_dump($compte2);
echo "<br>";
$compte1->voirSolde();
echo "<br>";
$compte1->deposer(2000);
var_dump($compte1);
echo "<br>";
$compte1->retirer(10000);
var_dump($compte1);
echo "<br>";
$compte3 = new Compte('tetiana', 2000);
var_dump($compte3);
echo "<br>";

echo $compte1->getTitulaire();
echo "<br>";
echo $compte3->getSolde();
echo "<br>";

$compte2->setTitulaire("Tata");
$compte2->setSolde("480");
var_dump($compte2);
echo "<br>";

echo $compte3->__toString();




?>
