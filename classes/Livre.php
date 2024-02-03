<?php

class Livre {
    private string $titre; 
    private int $nbPages;
    private DateTime $anneeParution;
    private int $prix;
    private Auteur $auteur;

    public function __construct(string $titre, int $nbPages, string $anneeParution, int $prix, Auteur $auteur)
    {
        $this->titre = $titre;
        $this->nbPages = $nbPages;
        $this->anneeParution = new DateTime($anneeParution);
        $this->prix = $prix;
        $this->auteur = $auteur;
    }

    

    
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
   
    public function getAnneeParution()
    {
    return $this->anneeParution;
    }
    public function setAnneeParution($anneeParution)
    {
    $this->anneeParution = $anneeParution;

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

    public function __toString()
    {
        return $this->titre."(".$this->anneeParution->format('Y').")";
    }

    public function bibliograpfie(){
        echo "{$this} : {$this->nbPages} pages / {$this->prix} €<br>";
    }
    
    
}

