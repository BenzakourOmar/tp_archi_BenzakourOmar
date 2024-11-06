<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241106150045 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE acteur (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) NOT NULL, prenom VARCHAR(50) NOT NULL, date_naissance DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE film (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(50) NOT NULL, duree INT NOT NULL, annee_de_sortie INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE jouer_dans (film_id INT NOT NULL, acteur_id INT NOT NULL, role VARCHAR(50) NOT NULL, INDEX IDX_A8211D30567F5183 (film_id), INDEX IDX_A8211D30DA6F574A (acteur_id), PRIMARY KEY(film_id, acteur_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE realisateur (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) NOT NULL, prenom VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) NOT NULL, prenom VARCHAR(50) NOT NULL, email VARCHAR(50) NOT NULL, mot_de_passe VARCHAR(50) NOT NULL, role VARCHAR(50) NOT NULL, UNIQUE INDEX UNIQ_1D1C63B3E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE prefere (utilisateur_id INT NOT NULL, film_id INT NOT NULL, INDEX IDX_16BC7415FB88E14F (utilisateur_id), INDEX IDX_16BC7415567F5183 (film_id), PRIMARY KEY(utilisateur_id, film_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE film ADD CONSTRAINT FK_8244BE22BF396750 FOREIGN KEY (id) REFERENCES realisateur (id)');
        $this->addSql('ALTER TABLE jouer_dans ADD CONSTRAINT FK_A8211D30567F5183 FOREIGN KEY (film_id) REFERENCES film (id)');
        $this->addSql('ALTER TABLE jouer_dans ADD CONSTRAINT FK_A8211D30DA6F574A FOREIGN KEY (acteur_id) REFERENCES acteur (id)');
        $this->addSql('ALTER TABLE prefere ADD CONSTRAINT FK_16BC7415FB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE prefere ADD CONSTRAINT FK_16BC7415567F5183 FOREIGN KEY (film_id) REFERENCES film (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE film DROP FOREIGN KEY FK_8244BE22BF396750');
        $this->addSql('ALTER TABLE jouer_dans DROP FOREIGN KEY FK_A8211D30567F5183');
        $this->addSql('ALTER TABLE jouer_dans DROP FOREIGN KEY FK_A8211D30DA6F574A');
        $this->addSql('ALTER TABLE prefere DROP FOREIGN KEY FK_16BC7415FB88E14F');
        $this->addSql('ALTER TABLE prefere DROP FOREIGN KEY FK_16BC7415567F5183');
        $this->addSql('DROP TABLE acteur');
        $this->addSql('DROP TABLE film');
        $this->addSql('DROP TABLE jouer_dans');
        $this->addSql('DROP TABLE realisateur');
        $this->addSql('DROP TABLE utilisateur');
        $this->addSql('DROP TABLE prefere');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
