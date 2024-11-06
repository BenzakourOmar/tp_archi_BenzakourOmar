<?php

namespace App\Entity;

use App\Repository\PrefereRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PrefereRepository::class)]
class Prefere
{
    #[ORM\Id]
    #[ORM\ManyToOne(targetEntity: Utilisateur::class, inversedBy: 'films_favoris')]
    #[ORM\JoinColumn(name: "id", referencedColumnName: "id", nullable: false)]
    private $utilisateur;

    #[ORM\Id]
    #[ORM\ManyToOne(targetEntity: Film::class, inversedBy: 'utilisateurs')]
    #[ORM\JoinColumn(name: "id", referencedColumnName: "id", nullable: false)]
    private $film;

    public function getUtilisateur()
    {
        return $this->utilisateur;
    }

    public function setUtilisateur($utilisateur)
    {
        $this->utilisateur = $utilisateur;
        return $this;
    }

    public function getFilm()
    {
        return $this->film;
    }

    public function setFilm($film)
    {
        $this->film = $film;
        return $this;
    }
}
