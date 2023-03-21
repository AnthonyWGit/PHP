<?php
include 'Auteur.php';
include 'Bibliographie.php';
include 'livre.php';
$tolkien = new Auteur('Tolkien', 'J.R.R.');
$hpLovecraft = new Auteur('Lovecraft', 'H.P.');
$result = "";
$livre1 = new Livre('Le Seigneur des Anneaux', 1137, 1954, 25.0, $tolkien);
$livre2 = new Livre('Le Hobbit', 310, 1937, 10.0, $tolkien);
$livre3 = new Livre('L\'Appel de Cthulhu', 54, 1928, 5.0, $hpLovecraft);

$biblio = new Bibliographie();
$biblio->ajouterLivre($livre1);
$biblio->ajouterLivre($livre2);
$biblio->ajouterLivre($livre3);

$biblio->afficherBibliographie($tolkien);
