<?php

class Acteur
{
    private $acteur_id;
    private $nom;
    private $prenom;
    private $date_naissance;

    public function getId()
    {
        return $this->acteur_id;
    }
    
    public function setId($acteur_id)
    {
        $this->acteur_id = $acteur_id;

        return $this;
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

    public function getDateNaissance()
    {
        return $this->date_naissance;
    }

    public function setDateNaissance($date_naissance)
    {
        $this->date_naissance = $date_naissance;
    }

}
