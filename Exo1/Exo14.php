<h1>Exercice 14</h1>
<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).</p>
<h2>Resultat</h2>
<?php
$dateOfBirth = "19-05-1995";
$today = date("Y-m-d");
$diff = date_diff(date_create($dateOfBirth), date_create($today));
echo 'Age is '.$diff->format('%y').' years old.';
?>