<?php

namespace App\Entity;

use App\Repository\UtilisateurRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UtilisateurRepository::class)]
class Utilisateur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 50)]
    private $nom;

    #[ORM\Column(type: 'string', length: 50)]
    private $prenom;

    #[ORM\Column(type: 'string', length: 50, unique: true)]
    private $email;

    #[ORM\Column(type: 'string', length: 50)]
    private $mot_de_passe;

    #[ORM\Column(type: 'string', length: 50)]
    private $role;

    #[ORM\ManyToMany(targetEntity: Film::class)]
    #[ORM\JoinTable(name: 'prefere')]
    private $films_favoris;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
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

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getMot_de_passe()
    {
        return $this->mot_de_passe;
    }

    public function setMot_de_passe($mot_de_passe)
    {
        $this->mot_de_passe = $mot_de_passe;

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

    public function getFilms_favoris()
    {
        return $this->films_favoris;
    }

    public function setFilms_favoris($films_favoris)
    {
        $this->films_favoris = $films_favoris;

        return $this;
    }
}
