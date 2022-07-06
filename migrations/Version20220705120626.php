<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220705120626 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE users ADD country_id INT DEFAULT NULL, DROP country');
        $this->addSql('ALTER TABLE users ADD CONSTRAINT FK_1483A5E9F92F3E70 FOREIGN KEY (country_id) REFERENCES country (id)');
        $this->addSql('CREATE INDEX IDX_1483A5E9F92F3E70 ON users (country_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE users DROP FOREIGN KEY FK_1483A5E9F92F3E70');
        $this->addSql('DROP INDEX IDX_1483A5E9F92F3E70 ON users');
        $this->addSql('ALTER TABLE users ADD country VARCHAR(100) NOT NULL, DROP country_id');
    }
}
