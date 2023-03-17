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