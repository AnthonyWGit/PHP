<h1>Exercice 12</h1>
<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée 
(tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue 
respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola »)
Exemple : tableau ➔ Mickaël -> FRA, Virgile -> ESP, Marie-Claire -> ENG</p>
<h2>Résultat</h2>
<?php
$bienvenue = ["Bienvenue","Hola","Hello"];
$nationalites = ["Mickael"=>"FRA","Virgile"=>"ESP","Marie-Claire"=>"ENG"];
// On a besoin de convertir $nationalie qui est un array en string donc $aa 
foreach($nationalites as $prenom => $langue)
{
    echo " $prenom $langue <br>";
    switch ("$langue") {
        case "FRA":
            echo "Bienvenue $prenom $langue <br>";
            break;
        case "ESP":
            echo "Hola $prenom $langue <br>";
            break;
        case "ENG":
            echo "Hello $prenom $langue <br>";
            break;
    }
}
echo "</br>";
echo "</br>";
ksort($nationalites);
foreach($nationalites as $prenom => $langue)
{
    echo " $prenom $langue <br>";
    switch ("$langue") {
        case "FRA":
            echo "Bienvenue $prenom $langue <br>";
            break;
        case "ESP":
            echo "Hola $prenom $langue <br>";
            break;
        case "ENG":
            echo "Hello $prenom $langue <br>";
            break;
    }
}
//version tableau 3 entrées -- DEPRECIATED
/*
$helloLangages = array(
    array("Bienvenue ","Mickaël ","FRA "),
    array("Hola ","Virgile ","ESP "),
    array("Hello ","Marie-Claire ","ENG "),
);

$row = 0;
for ($row = 0;$row < 3; $row++)
{
    for ($col = 0; $col<3; $col++)
    {
        echo nl2br ($helloLangages[$row][$col]);
    }
    echo nl2br("\n");
}
echo "</br> <h3>Version triée</h3>";

array_multisort($helloLangages);
for ($row = 0;$row < 3; $row++)
{
    for ($col = 0; $col<3; $col++)
    {
        echo nl2br ($helloLangages[$row][$col]);
    }
    echo nl2br("\n");
}
*/
?>
