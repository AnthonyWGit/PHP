<?php
function formaterDateFr($date) {
    // Conversion de la date au format timestamp
    $timestamp = strtotime($date);

    // Création de la date en français
    $jour = date('l', $timestamp);
    $num_jour = date('j', $timestamp);
    $nom_mois = date('F', $timestamp);
    $annee = date('Y', $timestamp);

    // Tableaux des traductions en français
    $jours = array('Monday' => 'lundi', 'Tuesday' => 'mardi', 'Wednesday' => 
    'mercredi', 'Thursday' => 'jeudi', 'Friday' => 'vendredi', 'Saturday' => 'samedi', 'Sunday' => 'dimanche');
    $mois = array('January' => 'janvier', 'February' => 'février', 'March' => 'mars', 'April' => 'avril',
     'May' => 'mai', 'June' => 'juin', 'July' => 'juillet', 'August' => 'août', 'September' => 'septembre', 'October' => 'octobre',
      'November' => 'novembre', 'December' => 'décembre');

    // Affichage de la date en français
    $result = $jours[$jour] . ' ' . $num_jour . ' ' . $mois[$nom_mois] . ' ' . $annee;
    return $result;
}

$result = formaterDateFr("2022-07-02");
echo $result;
?>
exo suivant <br/>
<?php
function variableDump($array)
{
    foreach($array as $valeur) 
    {
   $result2 = var_dump($valeur)."<br/>";
   echo $result2;
    }
}
$tableauValeurs = [true, "texte", 10, 25.369, ["valeur1", "valeur2"]];
variableDump($tableauValeurs);
?>