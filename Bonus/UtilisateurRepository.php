<?php
include './Utilisateur.php';
include './Connexion.php';

class UtilisateurRepository {

    public function ajouterUtilisateur($utilisateur) {
        $conn = new Connexion();
        $sth = $conn->getConn()->prepare("INSERT INTO Utilisateur (nom, prenom, email, mot_de_passe, role) VALUES (:nom, :prenom, :email, :mot_de_passe, :role)");
        $sth->execute(array(
            ':nom' => $utilisateur->getNom(),
            ':prenom' => $utilisateur->getPrenom(),
            ':email' => $utilisateur->getEmail(),
            ':mot_de_passe' => $utilisateur->getMotDePasse(),
            ':role' => $utilisateur->getRole()
        ));
    }

    public function listerUtilisateurs() {
        $conn = new Connexion();
        $sth = $conn->getConn()->prepare("SELECT * FROM Utilisateur");
        $sth->execute();
        $rows = $sth->fetchAll();

        $tab = array();

        foreach ($rows as $row) {
            $utilisateur = new Utilisateur($row['nom'], $row['prenom'], $row['email'], $row['mot_de_passe'], $row['role']);
            $utilisateur->setId($row['utilisateur_id']);
            array_push($tab, $utilisateur);
        }

        return $tab;
    }

    public function recupererUtilisateur($id) {
        $conn = new Connexion();
        $sql = "SELECT * FROM Utilisateur WHERE utilisateur_id = ?";
        $stmt = $conn->getConn()->prepare($sql);
        $stmt->execute([$id]);
        $data = $stmt->fetch();

        $utilisateur = new Utilisateur($data['nom'], $data['prenom'], $data['email'], $data['mot_de_passe'], $data['role']);
        $utilisateur->setId($data['utilisateur_id']);

        return $utilisateur;
    }

    public function modifierUtilisateur($utilisateur) {
        $conn = new Connexion();
        $sth = $conn->getConn()->prepare("UPDATE Utilisateur SET nom = :nom, prenom = :prenom, email = :email, mot_de_passe = :mot_de_passe, role = :role WHERE utilisateur_id = :id");
        $sth->execute(array(
            ':id' => $utilisateur->getId(),
            ':nom' => $utilisateur->getNom(),
            ':prenom' => $utilisateur->getPrenom(),
            ':email' => $utilisateur->getEmail(),
            ':mot_de_passe' => $utilisateur->getMotDePasse(),
            ':role' => $utilisateur->getRole()
        ));
    }

    public function supprimerUtilisateur($id) {
        $conn = new Connexion();
        $sql = "DELETE FROM Utilisateur WHERE utilisateur_id = ?";
        $stmt = $conn->getConn()->prepare($sql);
        $stmt->execute([$id]);
    }
}
