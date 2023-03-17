<h1>Exercice 5</h1>
<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros. 
Attention, la valeur générée devra être arrondie à 2 décimales.
</p>
<h2>Résultat</h2>
<?php
$francs=100.00;
//Voir la doc round : 2 indique le nombre de digit après la virgule à guarder 
$euros = round(($francs / 6.55957), 2);
// nl2br pour pouvoir mettre des espacements dans le texte : ce sont les \n 
echo nl2br ("Montant en francs : $francs \n $francs francs = $euros");
?>