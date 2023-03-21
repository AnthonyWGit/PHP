<?php
<<<<<<< HEAD
class Compte
{
    private string $_nomCompte;
    private float $_solde = 0;
    private string $_devise;
    private Titulaire $_titulaire;
    private float $_argent;
    public function __construct(string $nomCompte,float $solde,string $devise,Titulaire $titulaire)
=======
class Comptes
{
    private string $_nomCompte;
    private array $_nbComptes = [];
    private int $_solde = 0;
    private string $_devise;
    private string $_titulaire;
    private float $_argent;
    public function __construct(string $nomCompte,int $solde,string $devise,string $titulaire)
>>>>>>> 6c8fffa6358b7523206d1be74792cea13e33638d
    {
        $this->_nomCompte = $nomCompte;
        $this->_solde = $solde;
        $this->_devise = $devise;
        $this->_titulaire = $titulaire;
<<<<<<< HEAD
        $this->_titulaire->ajouterCompteBancaire($this);
=======
>>>>>>> 6c8fffa6358b7523206d1be74792cea13e33638d
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
<<<<<<< HEAD
    public function setTitulaire(Titulaire $titulaire)
=======
    public function setTitulaire(string $titulaire)
>>>>>>> 6c8fffa6358b7523206d1be74792cea13e33638d
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
<<<<<<< HEAD
    public function getTitulaire() : Titulaire
=======
    public function getTitulaire() : string
>>>>>>> 6c8fffa6358b7523206d1be74792cea13e33638d
    {
        return $this->_titulaire;
    }
    /*------------------METHODES--------------------*/
<<<<<<< HEAD
    public function créditer(float $argent) : string
    {
        if ($argent < 0)
        {
            $result = "Vous ne pouvez pas créditer une somme négative.<br>";
            return $result;
        }
        else
        {
        $this->_solde += $argent;
        $result = "Votre compte a été crédité de $argent ".$this->_devise."<br> ";
        $result.= "Nouveay solde : $this.<br>";
        return $result;
        }

    }
    public function débiter (float $argent) : string
    {
        if ($argent < 0)
        {
            $result = "Vous ne pouvez pas débiter une somme négative.<br>";
            return $result;
        }
        
        else if (($this->_solde - $argent) < 0)
        {
            $result = "L'opération n'est pas autorisée. Vous demandez le débit de $argent ".$this->_devise. " . Vous disposez de $this";    
            return $result;       
        }
        else
        {
            $this->_solde = $this->_solde-$argent;
            $result = "Votre compte ".$this->_nomCompte." a été débité de ".abs($argent)." ".$this->_devise.".<br> ";
            $result .="Nouveau solde $this.<br>";
            return $result;
        }
    }

    public function virement (float $argent, object $compte) : string
    {   
        if ($argent < 0)
        {
            $result = "Virer un montant négatif n'est pas possible.<br>";
            return $result;
        }
        else if ($this->_solde - $argent <0)
=======
    public function crediter(int $argent)
    {
        $this->_solde += $argent;
        $result = "Votre compte a été crédité de $this.";
        return $result;
    }
    public function débiter (int $argent)
    {
        if ($this->_solde -=$argent <0)
>>>>>>> 6c8fffa6358b7523206d1be74792cea13e33638d
        {
            $result = "L'opération n'est pas autorisée. Vous demandez le débit de $argent".$this->_devise. " . Vous disposez de $this";    
            return $result;       
        }
        else
        {
            $this->_solde =-$argent;
<<<<<<< HEAD
            $compte->créditer($argent);
            $result = " Virement : <strong> Votre compte $this->_nomCompte a été débité de $argent ".$this->_devise. ". 
            Votre compte $compte a été crédité de ".$argent." ".$this->_devise .".<br>";
            return $result;
        }    
    }
    public function infosCompte()
    {
        $result = "Nom du compte : ".$this->_nomCompte."<br>";
        $result .="Solde $this.<br>";
        $result .="Titulaire du compte : ".$this->_titulaire."<br><br>";
        return $result;
    }
=======
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
>>>>>>> 6c8fffa6358b7523206d1be74792cea13e33638d
    public function __toString()
    {
        return $this->_solde." ".$this->_devise;
    }
}

