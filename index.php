<?php

use App\Autoloader;
use App\Client\Compte as CompteClient;
use App\Banque\{CompteCourant, CompteEpargne};

require_once 'classes/Autoloader.php';
Autoloader::register();

// On instancie le compte
// On instancie sans préciser le découvert
$compte1 = new CompteCourant('Benoit', 2000);
$compte1->retirer(4000);
// On instancie en précisant le découvert
$compte2 = new CompteCourant('Tetiana', 100);
var_dump($compte1);
echo "<br>","<br>";
var_dump($compte2);
echo "<br>", "<br>";
$compteEpragne = new CompteEpargne('Robert', 200, 1);
var_dump($compteEpragne);
echo "<br>", "<br>";
$client = new CompteClient("Benoit", "Lafevre");
var_dump($client);





?>
