<h1>Exercice 12</h1>
<p>La fonction var_dump($variable) permet d’afficher les informations d’une variable.
Soit le tableau suivant :
$tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));
A l’aide d’une boucle, afficher les informations des variables contenues dans le tableau.</p>
<h2>Résulat</h2>
<?php
function variableDump($array)
{
    foreach($array as $valeur) 
    {
   $result2 = var_dump($valeur)."<br/>";
   echo $result2;
    }
}
$tableauValeurs = [true, "texte", 10, 25.369, ["valeur1", "valeur2"]];
variableDump($tableauValeurs);
?>