    <h1>Exo 5</h1>
    <p>
    Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en précisant le nom des champs associés.</p>
    <h2>Résultat</h2>
    <?php
    function afficherInput(array $UserInput = ["Non défini"])
    {
        $result = "<form action='#' method ='POST'>";
        foreach ($UserInput as $champs) {
            $UserInput = mb_strtolower($champs);
            $result.= "<label for='$UserInput'>$champs</label></br>
                        <input type='text' name='$champs' id='$champs'></br>";
        }
        $result.= "</form>";
        return $result;
    }
    $nomsInput = ["Nom", "Prénom", "Ville"];
    echo afficherInput($nomsInput);
    ?>