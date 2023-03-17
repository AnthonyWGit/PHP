<h1>Exercice 1</h1>
<p>
    Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de caractère passée en
    argument en majuscules et en rouge.
    Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) ;</p>
<h2>Résultat</h2>
<?php
//On oublie pas mb_strtoupper  pour ne pas zapper les accents
function convertirMajRouge($texte)
{
    $result = mb_strtoupper("<p style=color:red> $texte </p>");
    return $result;   
}
echo convertirMajRouge("Mon texte en paramètre");
?>
