<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220621103120 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE city DROP FOREIGN KEY FK_2D5B0234AE80F5DF');
        $this->addSql('ALTER TABLE city ADD CONSTRAINT FK_2D5B0234AE80F5DF FOREIGN KEY (department_id) REFERENCES department (id)');
        $this->addSql('ALTER TABLE department DROP FOREIGN KEY FK_CD1DE18AF92F3E70');
        $this->addSql('ALTER TABLE department ADD CONSTRAINT FK_CD1DE18AF92F3E70 FOREIGN KEY (country_id) REFERENCES country (id)');
        $this->addSql('ALTER TABLE dwelling DROP FOREIGN KEY FK_2E991EE8BAC62AF');
        $this->addSql('ALTER TABLE dwelling DROP FOREIGN KEY FK_2E991EEA76ED395');
        $this->addSql('ALTER TABLE dwelling ADD CONSTRAINT FK_2E991EE8BAC62AF FOREIGN KEY (city_id) REFERENCES city (id)');
        $this->addSql('ALTER TABLE dwelling ADD CONSTRAINT FK_2E991EEA76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE dwelling_meta DROP FOREIGN KEY FK_8CCA12FC74B1D91F');
        $this->addSql('ALTER TABLE dwelling_meta ADD CONSTRAINT FK_8CCA12FC74B1D91F FOREIGN KEY (dwelling_id) REFERENCES dwelling (id)');
        $this->addSql('ALTER TABLE post_meta DROP FOREIGN KEY FK_1EA7733E4B89032C');
        $this->addSql('ALTER TABLE post_meta ADD CONSTRAINT FK_1EA7733E4B89032C FOREIGN KEY (post_id) REFERENCES posts (id)');
        $this->addSql('ALTER TABLE posts DROP FOREIGN KEY FK_885DBAFA74B1D91F');
        $this->addSql('ALTER TABLE posts DROP FOREIGN KEY FK_885DBAFAA76ED395');
        $this->addSql('ALTER TABLE posts ADD CONSTRAINT FK_885DBAFA74B1D91F FOREIGN KEY (dwelling_id) REFERENCES dwelling (id)');
        $this->addSql('ALTER TABLE posts ADD CONSTRAINT FK_885DBAFAA76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C8495574B1D91F');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955A76ED395');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C8495574B1D91F FOREIGN KEY (dwelling_id) REFERENCES dwelling (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955A76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE reservation_meta DROP FOREIGN KEY FK_C1CBD95DB83297E7');
        $this->addSql('ALTER TABLE reservation_meta ADD CONSTRAINT FK_C1CBD95DB83297E7 FOREIGN KEY (reservation_id) REFERENCES reservation (id)');
        $this->addSql('ALTER TABLE user_meta DROP FOREIGN KEY FK_AD7358FCA76ED395');
        $this->addSql('ALTER TABLE user_meta ADD CONSTRAINT FK_AD7358FCA76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE users CHANGE roles roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\'');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1483A5E9E7927C74 ON users (email)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE city DROP FOREIGN KEY FK_2D5B0234AE80F5DF');
        $this->addSql('ALTER TABLE city ADD CONSTRAINT FK_2D5B0234AE80F5DF FOREIGN KEY (department_id) REFERENCES department (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE department DROP FOREIGN KEY FK_CD1DE18AF92F3E70');
        $this->addSql('ALTER TABLE department ADD CONSTRAINT FK_CD1DE18AF92F3E70 FOREIGN KEY (country_id) REFERENCES country (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE dwelling DROP FOREIGN KEY FK_2E991EEA76ED395');
        $this->addSql('ALTER TABLE dwelling DROP FOREIGN KEY FK_2E991EE8BAC62AF');
        $this->addSql('ALTER TABLE dwelling ADD CONSTRAINT FK_2E991EEA76ED395 FOREIGN KEY (user_id) REFERENCES users (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE dwelling ADD CONSTRAINT FK_2E991EE8BAC62AF FOREIGN KEY (city_id) REFERENCES city (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE dwelling_meta DROP FOREIGN KEY FK_8CCA12FC74B1D91F');
        $this->addSql('ALTER TABLE dwelling_meta ADD CONSTRAINT FK_8CCA12FC74B1D91F FOREIGN KEY (dwelling_id) REFERENCES dwelling (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE post_meta DROP FOREIGN KEY FK_1EA7733E4B89032C');
        $this->addSql('ALTER TABLE post_meta ADD CONSTRAINT FK_1EA7733E4B89032C FOREIGN KEY (post_id) REFERENCES posts (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE posts DROP FOREIGN KEY FK_885DBAFAA76ED395');
        $this->addSql('ALTER TABLE posts DROP FOREIGN KEY FK_885DBAFA74B1D91F');
        $this->addSql('ALTER TABLE posts ADD CONSTRAINT FK_885DBAFAA76ED395 FOREIGN KEY (user_id) REFERENCES users (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE posts ADD CONSTRAINT FK_885DBAFA74B1D91F FOREIGN KEY (dwelling_id) REFERENCES dwelling (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955A76ED395');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C8495574B1D91F');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955A76ED395 FOREIGN KEY (user_id) REFERENCES users (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C8495574B1D91F FOREIGN KEY (dwelling_id) REFERENCES dwelling (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservation_meta DROP FOREIGN KEY FK_C1CBD95DB83297E7');
        $this->addSql('ALTER TABLE reservation_meta ADD CONSTRAINT FK_C1CBD95DB83297E7 FOREIGN KEY (reservation_id) REFERENCES reservation (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_meta DROP FOREIGN KEY FK_AD7358FCA76ED395');
        $this->addSql('ALTER TABLE user_meta ADD CONSTRAINT FK_AD7358FCA76ED395 FOREIGN KEY (user_id) REFERENCES users (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('DROP INDEX UNIQ_1483A5E9E7927C74 ON users');
        $this->addSql('ALTER TABLE users CHANGE roles roles VARCHAR(50) NOT NULL');
    }
}
