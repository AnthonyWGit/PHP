<?php
// require et include marchent aussi : plutot require parce que le fichier de classe doit être nécéssaire 
require_once('Voiture.php');
$v1 = new Voiture("Peugeot", "408", 5);
$v2 = new Voiture("Citroën", "C4", 3);
$result = "";
$result .= $v1->demarrer();
$result .= $v1->accelerer(50);
$result .= $v1->ralentir(20);
$result .= $v1->accelerer(30);
$result .= $v1->ralentir(70);
$result .= $v1->accelerer(308);
$result .= $v2->demarrer();
$result .= $v2->stopper();
$result .= $v2->accelerer(70);
$result .= $v2->accelerer(20);
$result .= $v1->afficherVitesseActuelle();
$result .= $v2->afficherVitesseActuelle();
$result .= $v2->afficher(1);
$result .= $v1->afficher(2);
echo $result;
?>