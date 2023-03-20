<?php
// require et include marchent aussi : plutot require parce que le fichier de classe doit être nécéssaire 
require_once('Voiture.php');
$v1 = new Voiture("Peugeot","408");
$ve1 = new VoitureElectrique("BMW","I3",100);
$result ="";
$result .= $v1->getInfos()."<br/>";
$result .= $ve1->getInfos()."<br/>";
echo $result;
?>