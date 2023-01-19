<?php
require_once 'classes/Compte_class.php';
require_once 'classes/CompteCourant.php';
require_once 'classes/CompteEpargne.php';



// On instancie le compte
// On instancie sans préciser le découvert
$compte1 = new CompteCourant('Benoit', 2000);
$compte1->retirer(4000);
// On instancie en précisant le découvert
$compte2 = new CompteCourant('Tetiana', 100);
var_dump($compte1);
echo "<br>";
var_dump($compte2);
$compteEpragne = new CompteEpargne('Robert', 200, 1);
var_dump($compteEpragne);





?>
