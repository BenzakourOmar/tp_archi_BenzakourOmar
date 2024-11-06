<?php

class Film
{
    private $film_id;
    private $titre;
    private $duree;
    private $annee_de_sortie;
    private $realisateur_id;

    public function getId()
    {
        return $this->film_id;
    }

    public function setId($film_id)
    {
        $this->film_id = $film_id;

        return $this;
    }

    public function getTitre()
    {
        return $this->titre;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    public function getDuree()
    {
        return $this->duree;
    }

    public function setDuree($duree)
    {
        $this->duree = $duree;
    }

    public function getAnneeDeSortie()
    {
        return $this->annee_de_sortie;
    }

    public function setAnneeDeSortie($annee_de_sortie)
    {
        $this->annee_de_sortie = $annee_de_sortie;
    }

    public function getRealisateurId()
    {
        return $this->realisateur_id;
    }

    public function setRealisateurId($realisateur_id)
    {
        $this->realisateur_id = $realisateur_id;
    }

}
