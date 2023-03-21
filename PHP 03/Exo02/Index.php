<?php
include 'Auteur.php';
include 'Bibliographie.php';
include 'Livre.php';
$tolkien = new Auteur('Tolkien', 'J.R.R.');
$hpLovecraft = new Auteur('Lovecraft', 'H.P.');
$result = "";
$livre1 = new Livre('Le Seigneur des Anneaux', 1137, 1954, 25.0, $tolkien);
$livre2 = new Livre('Le Hobbit', 310, 1937, 10.0, $tolkien);
$livre3 = new Livre('L\'Appel de Cthulhu', 54, 1928, 5.0, $hpLovecraft);

$biblio = new Bibliographie();
echo $biblio->ajouterLivre($livre1);
echo $biblio->ajouterLivre($livre2);
echo $biblio->ajouterLivre($livre3);

echo $biblio->afficherBibliographie($tolkien);
