<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240125131319 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE property ADD numero_way INT NOT NULL, ADD name_way VARCHAR(50) NOT NULL, ADD type_way VARCHAR(50) NOT NULL, ADD departement VARCHAR(50) NOT NULL, ADD region VARCHAR(50) NOT NULL, ADD map VARBINARY(255) NOT NULL, DROP adresse');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE property ADD adresse VARCHAR(100) NOT NULL, DROP numero_way, DROP name_way, DROP type_way, DROP departement, DROP region, DROP map');
    }
}
