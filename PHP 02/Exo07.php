<h1>Exercice 7</h1>
<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser dans le tableau associatif si la case est cochée ou non.
Exemple :
genererCheckbox($elements);
//où $elements est un tableau associatif clé => valeur avec 3 entrées.</p>
<h2>Résultat</h2>
<?php 
function genererCheckbox($elementss)
{
    $result="";
    foreach ($elementss as $numChoix=>$vraiOuFaux)
    {
        if ($vraiOuFaux =="Vrai")
        {
            $result.= "<input type='checkbox' id='$numChoix' name='$numChoix' checked>
            <label for='$numChoix'>Choix $numChoix<br/></label></input>";
        }
        else 
        {
            $result.="<input type='checkbox' id='$numChoix' name='$numChoix'>
            <label for='$numChoix'>Choix $numChoix<br/></label></input>";  
        }

        
    }
    return $result;
}
$elementss=[1=>"Vrai",2=>"Vrai",3=>"Faux"];
echo genererCheckbox($elementss);
?>
