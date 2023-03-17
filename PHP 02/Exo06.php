<h1>Exercice 6</h1>
<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs.
Exemple :
$elements = array("Monsieur","Madame","Mademoiselle");
alimenterListeDeroulante($elements); </p>
<?php
function alimenterListeDeroulante($elements)
{
    $result ="<select name='liste'>";
 //   echo "<select name='liste'>";
    foreach ($elements as $elements) 
    {
        $result.= "<option value='$elements'>$elements</option>";
    }
    $result .="</select>";
    return $result;
}
$elements = ["Monsieur", "Madame", "Mademoiselle"];
echo alimenterListeDeroulante($elements);
?>