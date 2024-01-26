<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240125121413 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE property (id INT AUTO_INCREMENT NOT NULL, category VARCHAR(50) NOT NULL, type VARCHAR(50) NOT NULL, adresse VARCHAR(100) NOT NULL, city VARCHAR(50) NOT NULL, zipecode INT NOT NULL, picture VARCHAR(255) NOT NULL, surface DOUBLE PRECISION NOT NULL, status VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, price DOUBLE PRECISION NOT NULL, num_rooms INT NOT NULL, num_bathrooms INT NOT NULL, num_parkings INT NOT NULL, num_stage INT NOT NULL, numero_stage INT NOT NULL, image VARBINARY(255) NOT NULL, internet TINYINT(1) DEFAULT NULL, balcon TINYINT(1) DEFAULT NULL, salle_sport TINYINT(1) DEFAULT NULL, piscine TINYINT(1) DEFAULT NULL, cuisine TINYINT(1) DEFAULT NULL, security_cam TINYINT(1) DEFAULT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE property');
    }
}
