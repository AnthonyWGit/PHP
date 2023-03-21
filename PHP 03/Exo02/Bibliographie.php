<?php
class Bibliographie {
    private $livres;
    
    public function __construct() 
    {
        $this->livres = [];
    }
    
    public function ajouterLivre($livre)
     {
        $this->livres[] = $livre;
    }
    
    public function afficherBibliographie($auteur) 
    {
        $result ='Bibliographie de ' . $auteur . ':' . PHP_EOL;
        return $result;
        foreach ($this->livres as $livre) 
        {
            if ($livre->getAuteur() == $auteur)
            {
                echo '- ' . $livre . PHP_EOL;
            }
        }
    }
}