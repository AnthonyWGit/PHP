<h1>Exercice 6</h1>
<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité 
d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)</p>
<h2>Résultat</h2>
<?php
$nombre = 5;
$prix = 9.99;
$tva = 0.2;
$tvabis = $tva * 100;
$resultat = $nombre * $prix + ($nombre * $prix * $tva);
echo nl2br("Votre panier contient $nombre articles. \n Le prix unitaire de votre achat est de $prix. \n La TVA est de $tvabis%.");
echo nl2br("\n Le montant de la facture à régler est de : $resultat €");
?>