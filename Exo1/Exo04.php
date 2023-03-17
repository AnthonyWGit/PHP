<h1>Exercice 4</h1>
<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>
<h2>Résultat</h2>
<?php

function check_palin($palin)
//on vire les espaces
{
    $palin = str_replace(' ','',$palin);
//on vire les characteres speciaux
    $palin = str_replace('/[^A-Za-z0-9\-]/','',$palin);
//Passage en minuscule
    $palin = strtolower($palin);
//Réversion
    $reverse = strrev($palin);
if ($reverse == $palin)
    {
        echo "C'est un palindrome";
    }
else
    {
        echo "c'est pas le cas";
    }
}
$palin = "Engage le jeu que je le gagney";
check_palin($palin);
?>