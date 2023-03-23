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
$robertTownsend = new Realisateur("Townsend", "Robert", "homme", "1901");
//instancier Role
$superman = new Role("Superman");
$LtJohnJDunba = new Role (" Lt. John J. Dunba");
//instancier acteurs
$kevinCostner = new Acteur("Costner", "Kevin", "homme", "1955", $LtJohnJDunba);
$henryCavill = new Acteur("cavill", "henry", "homme", "1983", $superman);
$tomWelling = new Acteur("welling", "tom", "homme", "1977", $superman);
//instancier Films
$meteorman = new Film("Meteor Man", "1993", 100,"string blabla²", "Comédie", $robertTownsend);
$justiceLeague = new Film("Justice League", "2017", 120, "Lorem Ipsum dolor sit amet consectetur adip", "Super-Héro", $zackSnyder);
$justiceLeague5 = new Film("Justice League", "2017", 120, "Lorem Ipsum dolor sit amet consectetur adip", "Super-Héro", $zackSnyder);

//Instancier Casting

//Affichage
echo $justiceLeague->afficherReal();
echo $zackSnyder->afficherFilmo();

echo $henryCavill->afficherFilmoActeur();
