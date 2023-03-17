<h1>Exercice 1</h1>
<p>I. Exercice 1
    Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de caractère passée en
    argument en majuscules et en rouge.
    Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) ;</p>
<h2>Résultat</h2>
<?php

function convertirMajRouge($texte)
{

    echo mb_strtoupper("<p style=color:red> $texte </p>");
}

echo convertirMajRouge("Mon texte en paramètre");
?>

<h1>Exercice 2</h1>
<p>Soit le tableau suivant :
    $capitales = array ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");
    Réaliser un algorithme permettant d'afficher le tableau HTML suivant (notez que le nom du pays s'affichera en
    majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à une fonction personnalisée.
    Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);</p>
<h2>Résultat<h2>
        <?php
        $capitales = ["France" => "Paris", "Allemagne" => "Berlin", "USA" => "Washington D.C", "Italie" => "Rome"];
        /* la version du prof est mieilleure
        echo "<style>
        table 
        {
        border-collapse : collapse;
        }
        th
        {
        border : 1px solid black;
        }
        td
        {
        border : 1px solid black; 
        padding : 0px 10px;
        }
        </style>";
        */
        function afficherTableHTML($capitales)
        {
            ksort($capitales); // Tri par ordre alphabétique du nom de pays
            $result= "<table border=1 >
                        <thead>
                            <tr>
                                <th>Pays</th>
                                <th>Capitale</th>
                            </tr>
                        </thead>
                        <tbody>";
            foreach ($capitales as $pays => $capitale) 
            {
                $result .=
                    "<tr>
                        <td>" .mb_strtoupper($pays) . "</td>
                        <td>" .ucfirst($capitale)."</td>
                    </tr>";
            }
            $result .="</tbody></table>";
            return $result;
        }
        echo afficherTableHTML($capitales);
        ?>

        <h1>Exo 3</h1>
        <p>III. Exercice 3
Afficher un lien hypertexte permettant d'accéder au site d'Elan Formation. Le lien devra s'ouvrir dans un nouvel onglet (_blank).</p>
        <h2>Résultat</h2>
        <?php
        function afficherElanFormation($result2)
        {
        $url = "https://www.elan-formation.fr/";
        $result2 .="<a href=\"$url\" target='_blank'>Elan Formation</a>";
        return $result2;
        } 
        $result2 ="";
        $result2 = afficherElanFormation($result2);
        echo $result2;
?>
        <h1>Exo 4</h1>IV. Exercice 4
A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).
On admet que l’URL de la page Wikipédia de la capitale adopte la forme : https://fr.wikipedia.org/wiki/
Le tableau passé en argument sera le suivant :
$capitales = array ("France"=>"Paris","Allemagne"=>"Berlin",
"USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");</p>
        <h2>Résultat</h2>
    <?php
    $capitales =["France"=>"Paris","Allemagne"=>"Berlin",
    "USA"=>"Washington D.C","Italie"=>"Rome","Espagne"=>"Madrid"];

    function afficherTableHTML2($capitales)
    {
        ksort($capitales);
        $result3= "<table border=1>
        <thead>
            <tr >
                <th>Pays</th>
                <th>Capitale</th>
                <th>Wikipedia</th>
            </tr>
        </thead>
        <tbody>";
        foreach($capitales as $pays => $capitale)
        {
            $url2 = "https://fr.wikipedia.org/wiki/"; //Accueil Wiki
            if ($capitale == "Washington D.C")
            {
                $url2 .="Washington_(district_de_Columbia)";// l'exception pour DC
                $result3.=
            "<tr>
                <td>" .mb_strtoupper($pays). "</td>
                <td>" .ucfirst($capitale). "</td>
                <td> <a href=\"$url2\" target=\"_blank\">Wikipedia</a></td>
            </tr>";
            }
            else
            {
                $url2 .=urlencode($capitale); //tout le reste
                $result3.=
                "<tr>
                <td>" .mb_strtoupper($pays). "</td>
                <td>" .ucfirst($capitale). "</td>
                <td> <a href=\"$url2\" target=\"_blank\">Wikipedia</a></td>
                </tr>";
               
            }
 
        }
        $result3 .="</tbody></table>";
        return $result3;
        
    }
    
    echo afficherTableHTML2($capitales);
?>

<h1>Exercice 6</h1>
<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs.
Exemple :
$elements = array("Monsieur","Madame","Mademoiselle");
alimenterListeDeroulante($elements); </p>
<?php
function alimenterListeDeroulante($elements)
{
    $result5 ="<select name='liste'>";
 //   echo "<select name='liste'>";
    foreach ($elements as $elements) 
    {
        $result5.= "<option value='$elements'>$elements</option>";
    }
    $result5 .="</select>";
    return $result5;
}
$elements = ["Monsieur", "Madame", "Mademoiselle"];
echo alimenterListeDeroulante($elements);
?>
<h1>Exercice 7</h1>
<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser dans le tableau associatif si la case est cochée ou non.
Exemple :
genererCheckbox($elements);
//où $elements est un tableau associatif clé => valeur avec 3 entrées.</p>
<h2>Résultat</h2>
<?php 
function genererCheckbox($elementss)
{
    $result7="";
    foreach ($elementss as $numChoix=>$vraiOuFaux)
    {
        if ($vraiOuFaux =="Vrai")
        {
            $result7.= "<input type='checkbox' id='$numChoix' name='$numChoix' checked>
            <label for='$numChoix'>Choix $numChoix<br/></label></input>";
        }
        else 
        {
            $result7.="<input type='checkbox' id='$numChoix' name='$numChoix'>
            <label for='$numChoix'>Choix $numChoix<br/></label></input>";  
        }

        
    }
    return $result7;
}
$elementss=[1=>"Vrai",2=>"Vrai",3=>"Faux"];
echo genererCheckbox($elementss);
?>
