<h1>Exercice 7</h1>
<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :
</br>Poussin : entre 6 et 7 ans
</br>Pupille : entre 8 et 9 ans
</br>Minime : entre 10 et 11 ans
</br>Cadet : à partir de 12 ans
Si la catégorie n’est pas gérée, merci de le préciser.</p>
<h2>Résultat</h2>
<?php
$age = 10;
if ($age == 6 or $age ==7)
    {
        echo nl2br("Votre gamin est dans la catégorie Poussin");
    }
else if ($age == 8 or $age == 9)
    {
        echo nl2br("Votre gamin est dans la catégorie Pupille");
    }
else if ($age == 10 or $age == 11)
    {
        echo nl2br("Votre gamin est dans la catégorie Minime");
    }
else if ($age > 12 && $age < PHP_INT_MAX)
    {
        echo nl2br("Votre gamin est dans la catégorie Cadet");
    }
else
{
    echo nl2br("Ce n'est pas un enfant ou il est déjà adulte !");
}
?>
<h1>Exercice 2</h1>
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