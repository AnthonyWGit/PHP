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
//instancier acteurs
$billCosby = new Acteur("cosby", "bill", "homme", "1937");
$henryCavill = new Acteur("cavill", "henry", "homme", "1983");
$tomWelling = new Acteur("welling", "tom", "homme", "1977");
//instancier Films
$meteorman = new Film("Meteor Man", "1993", 100,"string blabla²", "Comédie", $robertTownsend);
$justiceLeague = new Film("Justice League", "2017", 120, "Lorem Ipsum dolor sit amet consectetur adip", "Super-Héro", $zackSnyder);
$justiceLeague5 = new Film("Justice League", "2017", 120, "Lorem Ipsum dolor sit amet consectetur adip", "Super-Héro", $zackSnyder);
//instancier Role

//Instancier Casting

//Affichage
echo $justiceLeague->afficherReal();
echo $zackSnyder->afficherFilmo();

$henryCavill->afficherFilmoActeur();
