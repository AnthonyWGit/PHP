<?php
class Bibliographie {
    private $_livres;
    
    public function __construct() 
    {
        $this->_livres = [];
    }
    
    public function ajouterLivre($livre)
     {
        $this->_livres[] = $livre;
    }
    
    public function afficherBibliographie($auteur) 
    {
        $result ='Bibliographie de ' . $auteur . ' : ' . PHP_EOL;

        foreach ($this->_livres as $livre) 
        {
            if ($livre->getAuteur() == $auteur)
            {
                echo '- ' . $livre . PHP_EOL;
            }
            return $result;
        }
    }
}