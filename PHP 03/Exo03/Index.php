<?php
include 'Personne.php';
include 'Acteur.php';
include 'Role.php';
include 'Film.php';
include 'Casting.php';
include 'Realisateur.php';


$result ="";
//Instancier Real
$zackSnyder = new Realisateur("Snyder","Zack", "homme", "1966");
$kevinCostnerR = new Realisateur("Costner", "Kevin", "homme", "1955");
$alfredGough = new Realisateur("Alfred", "Gough", "homme", "2000");
//instancier Role
$superman = new Role("Superman");
$LtJohnJDunba = new Role (" Lt. John J. Dunba");
//instancier acteurs
$kevinCostnerA = new Acteur("Costner", "Kevin", "homme", "1955", $LtJohnJDunba);
$henryCavill = new Acteur("cavill", "henry", "homme", "1983", $superman);
$tomWelling = new Acteur("welling", "tom", "homme", "1977", $superman);
//instancier Films
$justiceLeague = new Film("Justice League", "2017", 120, "Lorem Ipsum dolor sit amet consectetur adip", "Super-Héro", $zackSnyder);
$justiceLeague5 = new Film("Justice League", "2017", 120, "Lorem Ipsum dolor sit amet consectetur adip", "Super-Héro", $zackSnyder);
$danseAvecLesloups = new Film("Danse avec les Loups", "1990", 181, "DDDDDDDDDDDOOOOOOOOOOOOOOOO", "Western", $kevinCostnerR);
$smallville = new Film("XX", "XX", 877, "Horreur", "synop", $alfredGough);
//Instancier Casting
$castingDanseAvecLesloups = new Casting($LtJohnJDunba, $danseAvecLesloups, $kevinCostnerA);
$castingJusticeLeague = new Casting($superman, $justiceLeague, $henryCavill);
$castingSmallville = new Casting($superman,$smallville,$tomWelling);
//Affichage
echo $justiceLeague->afficherReal();
echo $zackSnyder->afficherFilmo();
echo $henryCavill->afficherFilmoActeur();
echo $danseAvecLesloups->afficherCasting();
echo $superman->afficherActeurRole();
