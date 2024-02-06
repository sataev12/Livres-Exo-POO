<?php

class Livre {
    private string $titre; 
    private int $nbPages;
    private DateTime $dateParution;
    private float $prix;
    private Auteur $auteur;

    public function __construct(string $titre, int $nbPages, string $dateParution, float $prix, Auteur $auteur)
    {
        $this->titre = $titre;
        $this->nbPages = $nbPages;
        $this->dateParution = new DateTime($dateParution);
        $this->prix = $prix;
        $this->auteur = $auteur;

        $this->auteur->ajouterLivre($this);
    }

    public function __toString()
    {
        return $this->titre."(".$this->dateParution->format('Y').")  : {$this->nbPages} pages / {$this->prix} €<br>";
    }

    // public function bibliograpfie(){
    //     echo $this->auteur;
    //     echo "{$this} : {$this->nbPages} pages / {$this->prix} €<br>";
    // }

    

    
    public function getTitre()
    {
        return $this->titre;
    }
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }
    public function getNbPages()
    {
        return $this->nbPages;
    }
    public function setNbPages($nbPages)
    {
        $this->nbPages = $nbPages;

        return $this;
    }
   
    public function getDateParution()
    {
    return $this->dateParution;
    }
    public function setDateParution($dateParution)
    {
    $this->dateParution = $dateParution;

    return $this;
    }
    public function getPrix()
    {
        return $this->prix;
    }
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }
    public function getAuteur()
    {
        return $this->auteur;
    }
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }
        
}

