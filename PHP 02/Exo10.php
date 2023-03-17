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
    $form = "<form action='#' method='POST'>";

    // Champ nom
    $form .= "<label for='nom'>Nom :</label><br>";
    $form .= "<input type='text' id='nom' name='nom'><br>";

    // Champ prénom
    $form .= "<label for='prenom'>Prénom :</label><br>";
    $form .= "<input type='text' id='prenom' name='prenom'><br>";

    // Champ adresse e-mail
    $form .= "<label for='email'>Adresse e-mail :</label><br>";
    $form .= "<input type='email' id='email' name='email' placeholder='email' value=''><br>";

    // Champ ville
    $form .= "<label for='ville'>Ville :</label><br>";
    $form .= "<input type='text' id='ville' name='ville'><br>";

    // Champ sexe
    $form .= "<label for='sexe'>Sexe :</label><br>";
    $form .= "<input type='radio' id='homme' name='sexe' value='homme'> <label for='homme'>Homme</label>";
    $form .= "<input type='radio' id='femme' name='sexe' value='femme'> <label for='femme'>Femme</label><br>";

    // Champ formation
    $form .= "<label for='formation'>Formation :</label><br>";
    $form .= "<select id='formation' name='formation'>
                <option value='developpeur'>Développeur Logiciel</option>
                <option value='designer'>Designer Web</option>
                <option value='integrator'>Intégrateur</option>
                <option value='chef'>Chef de Projet</option>
              </select><br>";

    // Bouton submit
    $form .= "<input type='submit' name='submit' value='Envoyer'>";

    $form .= "</form>";

    return $form;
}

echo afficherFormulaire();
?>