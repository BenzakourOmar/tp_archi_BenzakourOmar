<?php

class Prefere
{
    private $utilisateur_id;
    private $film_id;

    public function getUtilisateurId()
    {
        return $this->utilisateur_id;
    }

    public function setUtilisateurId($utilisateur_id)
    {
        $this->utilisateur_id = $utilisateur_id;
    }

    public function getFilmId()
    {
        return $this->film_id;
    }

    public function setFilmId($film_id)
    {
        $this->film_id = $film_id;
    }
}
