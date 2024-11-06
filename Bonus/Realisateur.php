<?php

class Realisateur
{
    private $realisateur_id;
    private $nom;
    private $prenom;

    public function getId()
    {
        return $this->realisateur_id;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }
}
