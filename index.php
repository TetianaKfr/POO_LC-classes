<?php
require_once 'classes/Compte_class.php';
require_once 'classes/CompteCourant.php';
require_once 'classes/CompteEpargne.php';



// On instancie le compte
// On instancie sans préciser le découvert
$compte1 = new CompteCourant('Benoit', 2000);

// On instancie en précisant le découvert
$compte2 = new CompteCourant('Benoit', 2000, 200);
var_dump($compte1);
echo "<br>";
var_dump($compte2);






?>
