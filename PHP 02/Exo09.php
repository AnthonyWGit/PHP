<h1>Exercice 9</h1>
<p>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de valeurs en paramètre ("Masculin, Féminin, Autre").
Exemple :
afficherRadio($nomsRadio);</p>
<?php
function afficherRadio($nomsRadio)
{

    $result ="";
    foreach ($nomsRadio as $genre)
    {
        $result.=
        "<input type ='radio' id='$genre' name='genre' value='$genre'>
        <label for='$genre'>$genre </label></br>";        
    }
    return $result;
}
$nomsRadio = ["Masculin","Féminin","NB","Autre"];
echo afficherRadio($nomsRadio);
?>