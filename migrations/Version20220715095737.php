<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220715095737 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE dwelling ADD type_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE dwelling ADD CONSTRAINT FK_2E991EEC54C8C93 FOREIGN KEY (type_id) REFERENCES posts (id)');
        $this->addSql('CREATE INDEX IDX_2E991EEC54C8C93 ON dwelling (type_id)');
        $this->addSql('ALTER TABLE posts CHANGE statut statut VARCHAR(50) DEFAULT NULL, CHANGE number number INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE dwelling DROP FOREIGN KEY FK_2E991EEC54C8C93');
        $this->addSql('DROP INDEX IDX_2E991EEC54C8C93 ON dwelling');
        $this->addSql('ALTER TABLE dwelling DROP type_id');
        $this->addSql('ALTER TABLE posts CHANGE statut statut VARCHAR(50) NOT NULL, CHANGE number number VARCHAR(25) DEFAULT NULL');
    }
}
