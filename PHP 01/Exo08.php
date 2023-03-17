<h1>Exercice 8</h1>
<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la 
forme :
</br>Table de 8 :
</br>1 x 8 = 8
</br>2 x 8 = 16 ..
</p>
<h2>Résultat</h2>
<?php
$num = 6;
$debutTable = 1;
$finTable = 15;
echo nl2br("Table de $num : \n ");
while ($debutTable <= $finTable) 
{
    $multiplication = $num*$debutTable;
    echo nl2br("$num X $debutTable = $multiplication \n");
    $debutTable++;
}
?>