    <h1>Exo 5</h1>
    <p>V. Exercice 5
    Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en précisant le nom des champs associés.</p>
    <h2>Résultat</h2>
    <?php
    function afficherInput(array $UserInput = ["Non défini"])
    {
        $result4 = "<form action='#' method ='POST'>";
        foreach ($UserInput as $champs) {
            $UserInput = mb_strtolower($champs);
            $result4.= "<label for='$UserInput'>$champs</label></br>
                        <input type='text' name='$champs' id='$champs'></br>";
        }
        $result4.= "</form>";
        return $result4;
    }
    $nomsInput = ["Nom", "Prénom", "Ville"];
    echo afficherInput($nomsInput);
    ?>