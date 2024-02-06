<?php

class Auteur {
    protected string $nom;
    protected string $prenom;
    private array $livres;

    public function __construct(string $nom, string $prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->livres = [];
    }
    //Methode toString
    public function __toString()
    {
        return $this->nom." ".$this->prenom;
    }

    //Ajouter les livres
    public function ajouterLivre(Livre $livre){
        $this->livres[] = $livre;
    }
    //Afficher info
    public function bibliograpfie(){
        echo "Livres de ". $this . "<br>";
        foreach ($this->livres as $livre) {
            echo $livre;
        }

    }


    
    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

}