<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220712203730 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE country (id INT AUTO_INCREMENT NOT NULL, code INT NOT NULL, alpha2 VARCHAR(2) NOT NULL, alpha3 VARCHAR(3) NOT NULL, name_en_gb VARCHAR(75) NOT NULL, name_fr VARCHAR(75) NOT NULL, europe TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE dwelling (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, pictures LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', title VARCHAR(100) NOT NULL, abstract VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, price DOUBLE PRECISION NOT NULL, address VARCHAR(150) NOT NULL, compl_address VARCHAR(255) DEFAULT NULL, city VARCHAR(255) NOT NULL, state VARCHAR(255) NOT NULL, country INT NOT NULL, longitude DOUBLE PRECISION NOT NULL, latitude DOUBLE PRECISION NOT NULL, added_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', activate TINYINT(1) NOT NULL, deleted_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_2E991EEA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE dwelling_meta (id BIGINT AUTO_INCREMENT NOT NULL, dwelling_id INT DEFAULT NULL, field VARCHAR(150) NOT NULL, value LONGTEXT NOT NULL, INDEX IDX_8CCA12FC74B1D91F (dwelling_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE functions (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(150) NOT NULL, abstract VARCHAR(255) DEFAULT NULL, description LONGTEXT DEFAULT NULL, bool TINYINT(1) DEFAULT NULL, percent VARCHAR(25) DEFAULT NULL, price DOUBLE PRECISION DEFAULT NULL, type VARCHAR(50) DEFAULT NULL, added_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE message (id INT AUTO_INCREMENT NOT NULL, sender_id INT DEFAULT NULL, recipient_id INT DEFAULT NULL, message LONGTEXT NOT NULL, sender_delete_msg TINYINT(1) DEFAULT NULL, recipient_delete_msg TINYINT(1) NOT NULL, added_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_B6BD307FF624B39D (sender_id), INDEX IDX_B6BD307FE92F8F78 (recipient_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE post_meta (id BIGINT AUTO_INCREMENT NOT NULL, post_id INT DEFAULT NULL, field VARCHAR(150) NOT NULL, value LONGTEXT NOT NULL, INDEX IDX_1EA7733E4B89032C (post_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE posts (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, dwelling_id INT DEFAULT NULL, type VARCHAR(50) NOT NULL, title VARCHAR(150) NOT NULL, abstract VARCHAR(150) DEFAULT NULL, description LONGTEXT NOT NULL, statut VARCHAR(50) NOT NULL, number VARCHAR(25) DEFAULT NULL, picture LONGTEXT DEFAULT NULL, added_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_885DBAFAA76ED395 (user_id), INDEX IDX_885DBAFA74B1D91F (dwelling_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservation (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, dwelling_id INT DEFAULT NULL, statut VARCHAR(50) NOT NULL, start_date DATE NOT NULL, end_date DATE NOT NULL, reserved_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_42C84955A76ED395 (user_id), INDEX IDX_42C8495574B1D91F (dwelling_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservation_meta (id BIGINT AUTO_INCREMENT NOT NULL, reservation_id INT DEFAULT NULL, field VARCHAR(150) NOT NULL, value LONGTEXT NOT NULL, INDEX IDX_C1CBD95DB83297E7 (reservation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_meta (id BIGINT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, field VARCHAR(150) NOT NULL, value LONGTEXT NOT NULL, INDEX IDX_AD7358FCA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, first_name VARCHAR(100) NOT NULL, last_name VARCHAR(50) NOT NULL, society VARCHAR(50) DEFAULT NULL, birthday DATE DEFAULT NULL, email VARCHAR(150) NOT NULL, phone_number VARCHAR(25) DEFAULT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', address VARCHAR(150) NOT NULL, compl_address VARCHAR(255) DEFAULT NULL, city VARCHAR(75) NOT NULL, country INT NOT NULL, activation_key VARCHAR(255) NOT NULL, statut TINYINT(1) NOT NULL, host VARCHAR(50) NOT NULL, password VARCHAR(255) NOT NULL, added_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', account TINYINT(1) NOT NULL, delete_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', deleted_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', UNIQUE INDEX UNIQ_1483A5E9E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE dwelling ADD CONSTRAINT FK_2E991EEA76ED395 FOREIGN KEY (user_id) REFERENCES users (id) ON DELETE CASCADE ON UPDATE CASCADE');
        $this->addSql('ALTER TABLE dwelling_meta ADD CONSTRAINT FK_8CCA12FC74B1D91F FOREIGN KEY (dwelling_id) REFERENCES dwelling (id) ON DELETE CASCADE ON UPDATE CASCADE');
        $this->addSql('ALTER TABLE message ADD CONSTRAINT FK_B6BD307FF624B39D FOREIGN KEY (sender_id) REFERENCES users (id) ON DELETE CASCADE ON UPDATE CASCADE');
        $this->addSql('ALTER TABLE message ADD CONSTRAINT FK_B6BD307FE92F8F78 FOREIGN KEY (recipient_id) REFERENCES users (id) ON DELETE CASCADE ON UPDATE CASCADE');
        $this->addSql('ALTER TABLE post_meta ADD CONSTRAINT FK_1EA7733E4B89032C FOREIGN KEY (post_id) REFERENCES posts (id) ON DELETE CASCADE ON UPDATE CASCADE');
        $this->addSql('ALTER TABLE posts ADD CONSTRAINT FK_885DBAFAA76ED395 FOREIGN KEY (user_id) REFERENCES users (id) ON DELETE CASCADE ON UPDATE CASCADE');
        $this->addSql('ALTER TABLE posts ADD CONSTRAINT FK_885DBAFA74B1D91F FOREIGN KEY (dwelling_id) REFERENCES dwelling (id) ON DELETE CASCADE ON UPDATE CASCADE');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955A76ED395 FOREIGN KEY (user_id) REFERENCES users (id) ON DELETE CASCADE ON UPDATE CASCADE');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C8495574B1D91F FOREIGN KEY (dwelling_id) REFERENCES dwelling (id) ON DELETE CASCADE ON UPDATE CASCADE');
        $this->addSql('ALTER TABLE reservation_meta ADD CONSTRAINT FK_C1CBD95DB83297E7 FOREIGN KEY (reservation_id) REFERENCES reservation (id) ON DELETE CASCADE ON UPDATE CASCADE');
        $this->addSql('ALTER TABLE user_meta ADD CONSTRAINT FK_AD7358FCA76ED395 FOREIGN KEY (user_id) REFERENCES users (id) ON DELETE CASCADE ON UPDATE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE dwelling_meta DROP FOREIGN KEY FK_8CCA12FC74B1D91F');
        $this->addSql('ALTER TABLE posts DROP FOREIGN KEY FK_885DBAFA74B1D91F');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C8495574B1D91F');
        $this->addSql('ALTER TABLE post_meta DROP FOREIGN KEY FK_1EA7733E4B89032C');
        $this->addSql('ALTER TABLE reservation_meta DROP FOREIGN KEY FK_C1CBD95DB83297E7');
        $this->addSql('ALTER TABLE dwelling DROP FOREIGN KEY FK_2E991EEA76ED395');
        $this->addSql('ALTER TABLE message DROP FOREIGN KEY FK_B6BD307FF624B39D');
        $this->addSql('ALTER TABLE message DROP FOREIGN KEY FK_B6BD307FE92F8F78');
        $this->addSql('ALTER TABLE posts DROP FOREIGN KEY FK_885DBAFAA76ED395');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955A76ED395');
        $this->addSql('ALTER TABLE user_meta DROP FOREIGN KEY FK_AD7358FCA76ED395');
        $this->addSql('DROP TABLE country');
        $this->addSql('DROP TABLE dwelling');
        $this->addSql('DROP TABLE dwelling_meta');
        $this->addSql('DROP TABLE functions');
        $this->addSql('DROP TABLE message');
        $this->addSql('DROP TABLE post_meta');
        $this->addSql('DROP TABLE posts');
        $this->addSql('DROP TABLE reservation');
        $this->addSql('DROP TABLE reservation_meta');
        $this->addSql('DROP TABLE user_meta');
        $this->addSql('DROP TABLE users');
    }
}
