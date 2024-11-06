<?php

class JouerDans
{
    private $film_id;
    private $acteur_id;
    private $role;

    public function getFilmId()
    {
        return $this->film_id;
    }

    public function setFilmId($film_id)
    {
        $this->film_id = $film_id;
    }

    public function getActeurId()
    {
        return $this->acteur_id;
    }

    public function setActeurId($acteur_id)
    {
        $this->acteur_id = $acteur_id;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role)
    {
        $this->role = $role;
    }
}
