<h1>Exo 3</h1>
        <p>
Afficher un lien hypertexte permettant d'accéder au site d'Elan Formation. Le lien devra s'ouvrir dans un nouvel onglet (_blank).</p>
<h2>Résultat</h2>
<?php
function afficherElanFormation($result)
{
$url = "https://www.elan-formation.fr/";
$result .="<a href=\"$url\" target='_blank'>Elan Formation</a>";
return $result;
} 
$result ="";
$result = afficherElanFormation($result);
echo $result;
?>