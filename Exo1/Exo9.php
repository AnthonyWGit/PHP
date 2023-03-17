<h1>Exercice 9</h1>
<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de 
plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).</p>
<h2>Résultat</h2>
<?php
$sex = "M";
$MsexText = "un homme";
$FsexText = "une femme";
$age = 95;
//Attention dans une comparaison l'égalité c'est == 
if ($sex == "F" && $age >= 18 || $sex=="F" && $age <= 35)
{
    echo nl2br("La personne est $FsexText. Elle a $age ans.\n Elle est imposable.");
}
else if ($sex == "F" && $age < 18 || $sex == "F" && $age > 35)
{
    echo nl2br("La personne est $FsexText. Elle a $age ans.\n Elle est non imposable.");
}
else if ($sex=="M" && $age <= 20)
{
    echo nl2br("La personne est $MsexText. Elle a $age ans.\n Elle est non imposable.");
}
else if ($sex=="M" && $age > 20)
{
    echo nl2br("La personne est $MsexText. Elle a $age ans.\n Elle est imposable.");
}
?>