<?php
class Comptes
{
    private string $_nomCompte;
    private array $_nbComptes = [];
    private int $_solde = 0;
    private string $_devise;
    private string $_titulaire;
    private float $_argent;
    public function __construct(string $nomCompte,int $solde,string $devise,string $titulaire)
    {
        $this->_nomCompte = $nomCompte;
        $this->_solde = $solde;
        $this->_devise = $devise;
        $this->_titulaire = $titulaire;
    }
    /*---------------------------SETTERS-----------------------*/
    public function setNomCompte(string $nomCompte)
    {
        $this->_nomCompte = $nomCompte;
    }
    public function setSolde(int $solde)
    {
        $this->_solde = $solde;
    }
    public function setDevise(string $devise)
    {
        $this->_devise = $devise;
    }
    public function setTitulaire(string $titulaire)
    {
        $this->_titulaire = $titulaire;
    }
    /*-------------------GETTERS--------------------------*/
    public function getNomCompte() : string
    {
        return $this->_nomCompte;
    }
    public function getSolde() : int
    {
        return $this->_solde;
    }
    public function getDevise() : string
    {
        return $this->_devise;
    }
    public function getTitulaire() : string
    {
        return $this->_titulaire;
    }
    /*------------------METHODES--------------------*/
    public function crediter(int $argent)
    {
        $this->_solde += $argent;
        $result = "Votre compte a été crédité de $this.";
        return $result;
    }
    public function débiter (int $argent)
    {
        if ($this->_solde -=$argent <0)
        {
            $result = "L'opération n'est pas autorisée. Vous demandez le débit de $argent".$this->_devise. " . Vous disposez de $this";    
            return $result;       
        }
        else
        {
            $this->_solde =-$argent;
            $result = "Votre compte a été débité de $this.";
            return $result;
        }
    }
    public function addCompte (string $compte)
    {
        $this->$_nbComptes[] = $compte;
        return $result;
    }
    public function virement (int $argent)
    {
        if ($this->_solde -=$argent <0)
        {
            $result = "L'opération n'est pas autorisée. Vous demandez le débit de $argent".$this->_devise. " . Vous disposez de $this";    
            return $result;       
        }
        else
        {
            $this->_solde =-$argent;
            
            $result = "Votre compte a été débité de $this.";

            return $result;
        }    
    }
    public function __toString()
    {
        return $this->_solde." ".$this->_devise;
    }
}

