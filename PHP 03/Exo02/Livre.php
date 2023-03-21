<?php
class Livre
{
    private Auteur $_auteur;
    private string $_titre;
    private int $_pages;
    private string $_annéeParution;
    private float $_prix;

    public function __construct(string $titre,int $pages, string $_annéeParution, float $prix, Auteur $auteur)
    {
        $this->_auteur = $auteur;
        $this->_prix = $prix;
        $this->_annéeParution = $_annéeParution;
        $this->_pages = $pages;
        $this->_titre = $titre;
        $this->_auteur->addLivre($this);
    }
    /*-----------SETTERS------------*/

    public function setTitre(string $titre)
    {
        $this->_titre = $titre;
    }
    public function setPages(int $pages)
    {
        $this->_pages = $pages;
    }
    public function setAnnéeParution(string $annéeParution)
    {
        $this->_annéeParution = $annéeParution;
    }
    public function setPrix(float $prix)
    {
        $this->_prix = $prix;
    }

    /*------------------GETTTERS*------------------*/
    public function getAuteur() : Auteur
    {
        return $this->_auteur;
    }
    public function getTitre() : string
    {
        return $this->_titre;
    }
    public function getPages() : int
    {
        return $this->_pages;
    }
    public function getAnnéePaturion() : string
    {
        return $this->_annéeParution;
    }
    public function getPrix() : float
    {
        return $this->_prix;
    }
    /*------------METHODES((((((((((((()))))))))))))*/

    public function __toString()
    {
        $result = "Auteur : ".$this->_auteur. ".<br>";
        $result .= "Titre : ".$this->_titre. ".<br>";
        $result .= "Nombre de pages : ".$this->_pages.".<br>";
        $result .= "Année de parution : ".$this->_annéeParution. ".<br>";
        $result .= "Prix : ".$this->_prix." $.<br>";
        return $result;
    }
}
