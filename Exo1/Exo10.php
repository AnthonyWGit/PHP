<h1>Exercice 10</h1>
<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui 
affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 
1 €.</p>
<h2>Résultat</h2>
<?php
//Opérations en cascade : De la somme de départ on enlève le plus gros diviseur et le modulo est là pour pouvoir traiter le reste de la première opération
$MontantAPayer=546;
$MontantAVerser=1150;
$ResteApayer=$MontantAVerser - $MontantAPayer;
$billet10= floor($ResteApayer / 10);
$ResteApayer = $ResteApayer % 10;
$billet5=floor($ResteApayer / 5);
$ResteApayer = $ResteApayer % 5;
$pieces2=floor($ResteApayer / 2);
$ResteApayer = $ResteApayer % 2;
$pieces1 = $ResteApayer / 1;

echo nl2br("Rendu de monnaie : \n $billet10 billets de 10€ - $billet5 billets de 5€ - $pieces2 pièces de 2€ - $pieces1 pièces de 1€");

?>
