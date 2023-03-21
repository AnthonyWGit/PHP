<?php

include 'Compte.php';
include 'Titulaire.php';

$result ="";
// Création d'un titulaire 
$titulaire = new Titulaire("Doe", "John", "01/01/1992", "Paris");
$titulaire2 = new Titulaire("EoD", "Nhoj", "03/08/1980", "Téhéran");
// Création de deux comptes bancaires pour le titulaire
$compteCourant = new Compte("Compte courant", 1000, "EUR", $titulaire);
$compteEpargne = new Compte("Compte épargne", 87772, "USD", $titulaire);
$compteCourant2 = new Compte("Compte courant", 77, "EUR", $titulaire2);
$compteEpargne2 = new Compte("Compte épargne", 820, "EUR", $titulaire2);
echo $compteCourant->infosCompte();
echo $compteEpargne->infosCompte();
echo $compteCourant2->infosCompte();
echo $compteEpargne2->infosCompte();
echo $titulaire->infosTitulaire();
echo $titulaire2->infosTitulaire();
echo $compteCourant->créditer(30);
echo $compteCourant->créditer(-30);
echo $compteCourant2->débiter(20);
echo $compteCourant2->débiter(-20);
echo $compteCourant->virement(-30,$compteEpargne);
echo $compteCourant->virement(30,$compteEpargne);

echo $titulaire2->infosTitulaire();
echo $result;