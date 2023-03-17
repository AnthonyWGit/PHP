<h1>Exercice 15</h1>
<p>Créer une classe Personne (nom, prénom et date de naissance).
Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.
$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;</p>
<h2>Résultat</h2>
<?php
class Personne {
    public $nom;
    public $prenom;
    public $age2;

    public function __construct($nom,$prenom,$age2)
    {
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->age2=$age2;
    }
/*    function set_name($nom)
    {
        $this->nom =$nom;
    }*/
    function get_name()
    {
        return $this->nom;
    }
/*    function set_forname($prenom)
    {
        $this->prenom =$prenom;
    }*/
    function get_forname()
    {
        return $this->prenom;
    }

    function get_age()
    {
        return $this->age2;
    }
}
$p1 = new Personne("DUPONT","MICHEL","1980-02-19");
$p2 = new Personne("JEAN","DELAJUNGLE","1985-01-17");

echo $p1->get_name()." ";
echo $p1->get_forname(). " ";
echo $p1->get_age()." ";
echo "</br>";
echo $p2->get_name()." ";
echo $p2->get_forname(). " ";
echo $p2->get_age()." ";
?>