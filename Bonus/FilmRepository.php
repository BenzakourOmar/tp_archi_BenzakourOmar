<?php
include './Film.php';
include './Connexion.php';

class FilmRepository {

    public function ajouterFilm($film) {
        $conn = new Connexion();
        $sth = $conn->getConn()->prepare("INSERT INTO Film (titre, duree, annee_de_sortie, realisateur_id) VALUES (:titre, :duree, :annee_de_sortie, :realisateur_id)");
        $sth->execute(array(
            ':titre' => $film->getTitre(),
            ':duree' => $film->getDuree(),
            ':annee_de_sortie' => $film->getAnneeDeSortie(),
            ':realisateur_id' => $film->getRealisateurId()
        ));
    }

    public function listerFilms() {
        $conn = new Connexion();
        $sth = $conn->getConn()->prepare("SELECT * FROM Film");
        $sth->execute();
        $rows = $sth->fetchAll();

        $tab = array();

        foreach ($rows as $row) {
            $film = new Film($row['titre'], $row['duree'], $row['annee_de_sortie'], $row['realisateur_id']);
            $film->setId($row['film_id']);
            array_push($tab, $film);
        }

        return $tab;
    }

    public function recupererFilm($id) {
        $conn = new Connexion();
        $sql = "SELECT * FROM Film WHERE film_id = ?";
        $stmt = $conn->getConn()->prepare($sql);
        $stmt->execute([$id]);
        $data = $stmt->fetch();

        $film = new Film($data['titre'], $data['duree'], $data['annee_de_sortie'], $data['realisateur_id']);
        $film->setId($data['film_id']);

        return $film;
    }

    public function modifierFilm($film) {
        $conn = new Connexion();
        $sth = $conn->getConn()->prepare("UPDATE Film SET titre = :titre, duree = :duree, annee_de_sortie = :annee_de_sortie, realisateur_id = :realisateur_id WHERE film_id = :id");
        $sth->execute(array(
            ':id' => $film->getId(),
            ':titre' => $film->getTitre(),
            ':duree' => $film->getDuree(),
            ':annee_de_sortie' => $film->getAnneeDeSortie(),
            ':realisateur_id' => $film->getRealisateurId()
        ));
    }

    public function supprimerFilm($id) {
        $conn = new Connexion();
        $sql = "DELETE FROM Film WHERE film_id = ?";
        $stmt = $conn->getConn()->prepare($sql);
        $stmt->execute([$id]);
    }
}
