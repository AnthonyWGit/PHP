<h1>Exercice 8</h1>
<p>Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.
Exemple :
repeterImage($url,4);</p>
<h2>Résultat</h2>
<?php
function repeterImage($N) {
    $result = "";
    $url="http://my.mobirise.com/data/userpic/764.jpg";
    for ($i=0; $i<$N; $i++) 
    {
        $result .= "<img src='$url' alt='image'>";
    }
    return $result;
}
echo repeterImage(4);
?>

<p>Version 2</p>
<?php
function repeterImage2($N2) {
    $result = "";
    for ($i=0; $i<$N2; $i++) 
    {
        $result .= "<img src='http://my.mobirise.com/data/userpic/764.jpg' alt='image'>";
    }
    return $result;
}
echo repeterImage(4);
?>  