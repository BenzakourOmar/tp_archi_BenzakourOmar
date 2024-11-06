<?php

namespace App\Entity;

use App\Repository\JouerDansRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: JouerDansRepository::class)]
class JouerDans
{
    #[ORM\Id]
    #[ORM\ManyToOne(targetEntity: Film::class)]
    #[ORM\JoinColumn(nullable: false)]
    private $film;

    #[ORM\Id]
    #[ORM\ManyToOne(targetEntity: Acteur::class)]
    #[ORM\JoinColumn(nullable: false)]
    private $acteur;

    #[ORM\Column(type: 'string', length: 50)]
    private $role;


    public function getFilm()
    {
        return $this->film;
    }

    public function setFilm($film)
    {
        $this->film = $film;

        return $this;
    }

    public function getActeur()
    {
        return $this->acteur;
    }

    public function setActeur($acteur)
    {
        $this->acteur = $acteur;

        return $this;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }
}
