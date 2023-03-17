<h1>Exercice 10</h1>
<p>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire complet qui contient 
    les informations suivantes : champs de texte avec nom, prénom, adresse e-mail, ville, sexe et une liste de choix parmi
     lesquels on pourra sélectionner un intitulé de formation : « Développeur Logiciel », « Designer web », « Intégrateur » 
     ou « Chef de projet ».
Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement de validation (submit).</p>
<h2>Résultat</h2>
<?php
    $coordonnees=["Nom"=>"text", "Prénom"=>"text", "Email"=>"email", "Ville"=>"text"];
    $sexe=["Masculin","Feminin","Autre"];
    $formations=["Développeur Logiciel", "Designer web", "Intégrateur", "Chef de projet"];
    echo afficherformulaire($coordonnees, $sexe, $formations);
function afficherFormulaire(array $coordonnees,array $sexe,array $formations)
{
    $result = "<form action='#' method = 'POST'>";
    $result .=userInput($coordonnees);
    $result .=buttonsRadio($sexe);
    $result .=formationsDeroulant($formations);
    $result .="<br><input type='submit' value='valider'>"; //c'est le boutton de validation !
    $result .="</form>"; //cf consigne : clore le formulaire avec /form
    return $result;
}
function userInput(array $array)
{
        $result = "";
        foreach ($array as $userInput=>$type)
        { /*parce que $coordonnées est un tableau associatif*/
            $minInput = strtolower($userInput);
            $result.= "<label for='$minInput'>$userInput</label></br>
                        <input type='$type' name='$minInput' id='$minInput'></br>";
        }
        return $result;
}
function buttonsRadio(array $array)
{
    
    $result=""; /*Donner une valeur à $result sinon erreur*/
    foreach ($array as $radio)
    {
        $minRadio =strtolower($radio);
        $result .= "<input type='radio' name='sexe' id='$minRadio'>
        <label for='$minRadio'>$radio</label><br>";
    }
    return $result;
}
function formationsDeroulant(array $array)
{
    $result="<select name='formations'>";
    foreach ($array as $formation)
    {
        $result.="<option value='$formation'>$formation</option>";
    }
    $result.="</select>";
    return $result;
}