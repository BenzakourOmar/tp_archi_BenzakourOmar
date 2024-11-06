<?php

namespace App\Entity;

use App\Repository\FilmRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FilmRepository::class)]
class Film
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 50)]
    private $titre;

    #[ORM\Column(type: 'integer')]
    private $duree;

    #[ORM\Column(type: 'integer')]
    private $annee_de_sortie;

    #[ORM\ManyToOne(targetEntity: Realisateur::class, inversedBy: 'films')]
    #[ORM\JoinColumn(name: 'id', referencedColumnName: 'id', nullable: false)]
    private $realisateur;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
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

    public function getDuree()
    {
        return $this->duree;
    }

    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    public function getAnnee_de_sortie()
    {
        return $this->annee_de_sortie;
    }

    public function setAnnee_de_sortie($annee_de_sortie)
    {
        $this->annee_de_sortie = $annee_de_sortie;

        return $this;
    }
 
    public function getRealisateur()
    {
        return $this->realisateur;
    }

    public function setRealisateur($realisateur)
    {
        $this->realisateur = $realisateur;

        return $this;
    }
}
