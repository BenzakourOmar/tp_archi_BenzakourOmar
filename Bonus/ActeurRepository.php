<?php
include './Acteur.php';
include './Connexion.php';

class ActeurRepository {

    public function ajouterActeur($acteur) {
        $conn = new Connexion();
        $sth = $conn->getConn()->prepare("INSERT INTO Acteur (nom, prenom, date_naissance) VALUES (:nom, :prenom, :date_naissance)");
        $sth->execute(array(
            ':nom' => $acteur->getNom(),
            ':prenom' => $acteur->getPrenom(),
            ':date_naissance' => $acteur->getDateNaissance()
        ));
    }

    public function listerActeurs() {
        $conn = new Connexion();
        $sth = $conn->getConn()->prepare("SELECT * FROM Acteur");
        $sth->execute();
        $rows = $sth->fetchAll();

        $tab = array();

        foreach ($rows as $row) {
            $acteur = new Acteur($row['nom'], $row['prenom'], $row['date_naissance']);
            $acteur->setId($row['acteur_id']);
            array_push($tab, $acteur);
        }

        return $tab;
    }

    public function recupererActeur($id) {
        $conn = new Connexion();
        $sql = "SELECT * FROM Acteur WHERE acteur_id = ?";
        $stmt = $conn->getConn()->prepare($sql);
        $stmt->execute([$id]);
        $data = $stmt->fetch();

        $acteur = new Acteur($data['nom'], $data['prenom'], $data['date_naissance']);
        $acteur->setId($data['acteur_id']);

        return $acteur;
    }

    public function modifierActeur($acteur) {
        $conn = new Connexion();
        $sth = $conn->getConn()->prepare("UPDATE Acteur SET nom = :nom, prenom = :prenom, date_naissance = :date_naissance WHERE acteur_id = :id");
        $sth->execute(array(
            ':id' => $acteur->getId(),
            ':nom' => $acteur->getNom(),
            ':prenom' => $acteur->getPrenom(),
            ':date_naissance' => $acteur->getDateNaissance()
        ));
    }

    public function supprimerActeur($id) {
        $conn = new Connexion();
        $sql = "DELETE FROM Acteur WHERE acteur_id = ?";
        $stmt = $conn->getConn()->prepare($sql);
        $stmt->execute([$id]);
    }
}
