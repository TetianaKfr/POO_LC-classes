<?php
require_once 'classes/Banque/Compte.php';
require_once 'classes/Banque/CompteCourant.php';
require_once 'classes/Banque/CompteEpargne.php';
require_once 'classes/Client/Compte.php';



// On instancie le compte
// On instancie sans préciser le découvert
$compte1 = new App\Banque\CompteCourant('Benoit', 2000);
$compte1->retirer(4000);
// On instancie en précisant le découvert
$compte2 = new App\Banque\CompteCourant('Tetiana', 100);
var_dump($compte1);
echo "<br>","<br>";
var_dump($compte2);
echo "<br>", "<br>";
$compteEpragne = new App\Banque\CompteEpargne('Robert', 200, 1);
var_dump($compteEpragne);





?>
