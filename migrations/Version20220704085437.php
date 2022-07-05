<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220704085437 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE country ADD europe TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE dwelling DROP FOREIGN KEY FK_2E991EE8BAC62AF');
        $this->addSql('DROP INDEX IDX_2E991EE8BAC62AF ON dwelling');
        $this->addSql('ALTER TABLE dwelling ADD city VARCHAR(255) NOT NULL, ADD region VARCHAR(255) NOT NULL, CHANGE city_id country_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE dwelling ADD CONSTRAINT FK_2E991EEF92F3E70 FOREIGN KEY (country_id) REFERENCES country (id)');
        $this->addSql('CREATE INDEX IDX_2E991EEF92F3E70 ON dwelling (country_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE country DROP europe');
        $this->addSql('ALTER TABLE dwelling DROP FOREIGN KEY FK_2E991EEF92F3E70');
        $this->addSql('DROP INDEX IDX_2E991EEF92F3E70 ON dwelling');
        $this->addSql('ALTER TABLE dwelling DROP city, DROP region, CHANGE country_id city_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE dwelling ADD CONSTRAINT FK_2E991EE8BAC62AF FOREIGN KEY (city_id) REFERENCES city (id)');
        $this->addSql('CREATE INDEX IDX_2E991EE8BAC62AF ON dwelling (city_id)');
    }
}
