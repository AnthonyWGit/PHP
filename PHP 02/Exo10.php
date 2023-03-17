<h1>Exercice 10</h1>
<p>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire complet qui contient 
    les informations suivantes : champs de texte avec nom, prénom, adresse e-mail, ville, sexe et une liste de choix parmi
     lesquels on pourra sélectionner un intitulé de formation : « Développeur Logiciel », « Designer web », « Intégrateur » 
     ou « Chef de projet ».
Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement de validation (submit).</p>
<h2>Résultat</h2>
<?php
function afficherFormulaire()
{
    $result = "<form action='#' method='POST'>";

    // Champ nom
    $result .= "<label for='nom'>Nom :</label><br>";
    $result .= "<input type='text' id='nom' name='nom'><br>";

    // Champ prénom
    $result .= "<label for='prenom'>Prénom :</label><br>";
    $result .= "<input type='text' id='prenom' name='prenom'><br>";

    // Champ adresse e-mail
    $result .= "<label for='email'>Adresse e-mail :</label><br>";
    $result .= "<input type='email' id='email' name='email' placeholder='email' value=''><br>";

    // Champ ville
    $result .= "<label for='ville'>Ville :</label><br>";
    $result .= "<input type='text' id='ville' name='ville'><br>";

    // Champ sexe
    $result .= "<label for='sexe'>Sexe :</label><br>";
    $result .= "<input type='radio' id='homme' name='sexe' value='homme'> <label for='homme'>Homme</label>";
    $result .= "<input type='radio' id='femme' name='sexe' value='femme'> <label for='femme'>Femme</label><br>";

    // Champ formation
    $result .= "<label for='formation'>Formation :</label><br>";
    $result .= "<select id='formation' name='formation'>
                <option value='developpeur'>Développeur Logiciel</option>
                <option value='designer'>Designer Web</option>
                <option value='integrator'>Intégrateur</option>
                <option value='chef'>Chef de Projet</option>
              </select><br>";

    // Bouton submit
    $result .= "<input type='submit' name='submit' value='Envoyer'>";

    $result .= "</form>";

    return $result;
}

echo afficherFormulaire();
?>