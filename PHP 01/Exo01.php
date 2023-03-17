<h1>Exercice 1</h1>
<p>Soit la phrase «Notre formation DL commence aujourd'hui».</p>
<p>Ecrire un algorithme permettant de compter le nombre de caractèrescontenus dans cette phrase (espaces inclus).</p>
<h2>Résultat</h2>
<?php 
//Déclarer la variable
$text = "Notre formation DL commence aujourd'hui";
//strlen compte tous les caractères donc les espaces aussi
echo "La phrase «". $text ."» contient ". strlen($text) ." caractères.";
?>