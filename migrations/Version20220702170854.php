<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220702170854 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE city ADD longitude DOUBLE PRECISION NOT NULL, ADD latitude DOUBLE PRECISION NOT NULL, DROP soundex_name, DROP common, DROP common_code, DROP arrondissement');
        $this->addSql('ALTER TABLE dwelling CHANGE pictures pictures LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE city ADD soundex_name VARCHAR(50) NOT NULL, ADD common VARCHAR(5) NOT NULL, ADD common_code VARCHAR(10) NOT NULL, ADD arrondissement VARCHAR(5) NOT NULL, DROP longitude, DROP latitude');
        $this->addSql('ALTER TABLE dwelling CHANGE pictures pictures LONGTEXT NOT NULL');
    }
}
