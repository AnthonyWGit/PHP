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
        $result= "<table border=1>
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
                $result.=
            "<tr>
                <td>" .mb_strtoupper($pays). "</td>
                <td>" .ucfirst($capitale). "</td>
                <td> <a href=\"$url2\" target=\"_blank\">Wikipedia</a></td>
            </tr>";
            }
            else
            {
                $url2 .=urlencode($capitale); //tout le reste
                $result.=
                "<tr>
                <td>" .mb_strtoupper($pays). "</td>
                <td>" .ucfirst($capitale). "</td>
                <td> <a href=\"$url2\" target=\"_blank\">Wikipedia</a></td>
                </tr>";
               
            }
 
        }
        $result .="</tbody></table>";
        return $result;
        
    }
    
    echo afficherTableHTML2($capitales);
?>
